<?php

use App\Laravue\Models\Role;
use App\User;
use Illuminate\Http\Request;
use \App\Laravue\Faker;
use \App\Laravue\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

/* Android app */

//Mobile App Login Endpoint
Route::post('/login', function (Request $request) {
    $data = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response([
            "data" => [
                'message' => [
                    'error' => true,
                    'error_msg' => 'These credentials do not match our records.'
                ],
            ]
        ], 404);
    }

    $token = $user->createToken('my-app-token')->plainTextToken;

    $response = [
        "data" => [
            'message' => [
                'error' => false,
            ],
            'user' => $user,
            'user_token' => [
                'actual_token' => $token
            ]
        ]
    ];

    return response($response, 200);
});

/* Registration */
Route::get('program', function () {
    $results = DB::table('programs')
        ->select('id', 'program_code', 'program_price')
        ->where(['status' => 1])
        ->orderBy('program_code', 'asc')
        ->get();

    return array(
        'error' => false,
        'message' => 'Everything is Ok',
        'result' => $results
    );
});

Route::post('semester-reg', function (Request $request) {
    $reg_num = $request->input('reg_num');

    $validator = Validator::make($request->input(), array(
        'reg_num' => 'required',
    ));

    if ($validator->fails()) {
        return response()->json([
            'error' => true,
            'messages' => $validator->errors(),],
            422);
    } else {
        $results = DB::table('users')
            ->select('id', 'name', 'email', 'reg_num', 'year', 'semester', 'program')
            ->where(['reg_num' => $reg_num])
            ->get();

        $name = $results[0]->name;
        $email = $results[0]->email;
        $reg_num = $results[0]->reg_num;
        $year = $results[0]->year;
        $semester = $results[0]->semester;
        $program_code = $results[0]->program;
        $program_name = null;
        $program_price = null;

        if ($program_code != null) {
            $resultsProgram = DB::table('programs')
                ->select('id', 'program_code', 'program_name', 'program_price')
                ->where(['program_code' => $program_code])
                ->get();

            $program_name = $resultsProgram[0]->program_name;
            $program_price = $resultsProgram[0]->program_price;
        }
    }

    return array(
        'error' => false,
        'message' => 'Everything is Ok',
        'result' => [
            [
                'name' => $name,
                'email' => $email,
                'reg_num' => $reg_num,
                'year' => $year,
                'semester' => $semester,
                'program_name' => $program_name,
                'program_price' => $program_price
            ]
        ]
    );
});

Route::post('/registration', function (Request $request) {

    $validator = Validator::make($request->input(), array(
        'password' => ['required', 'min:6'],
        'confirmPassword' => 'same:password',
    ));

    if ($validator->fails()) {
        return response()->json(['error' => true, 'messages' => $validator->errors(),], 422);
    } else {

        $params = $request->all();
        $user = \App\Laravue\Models\User::create([
            'name' => $params['name'],
            'email' => $params['email'],
            'password' => Hash::make($params['password']),
            'year' => $params['year'],
            'reg_num' => $params['reg_num'],
            'semester' => $params['semester'],
            'program' => $params['program'],
        ]);

        $role = Role::findByName($params['role']);
        $user->syncRoles($role);

        $token = $user->createToken('my-app-token')->plainTextToken;

        return response()->json([
            'error' => false,
            'message' => "Registration Successful",
            'user' => $user,
            'token' => $token
        ], 200);
    }

});
/* Registration End*/

//Collection of Mobile App Endpoints With Authentication
Route::group([
    'prefix' => 'v1',
    'middleware' => 'auth:sanctum',
    'namespace' => 'API\v1'],

    function () {

        // Users
        Route::post('user', 'UserController@studentRegistration');
        Route::post('user', 'UserController@fetchUserProfile');

        //courses
        Route::post('courses', 'CourseController@index');
        Route::post('current-courses', 'CourseController@myCurrentCourses');

        //Results
        Route::post('results', 'ExamController@myResults');

        //Timetable
        Route::post('timetable', 'ExamController@myTimetable');

        //Messages
        Route::post('send-msg-help-desk', 'MessageController@sendMsgToHelpDesk');
        Route::post('receive-msg-help-desk', 'MessageController@receiveMsgs');

        //Payments
        Route::post('customer-details', 'PaymentController@processingCustomerDetail');
        Route::post('process-payment', 'PaymentController@processPayment');

        // Pass
        Route::post('pass-class', 'PaymentController@processPassClass');
        Route::post('pass-exam', 'PaymentController@processPassExam');


    });
/* Android app End */


/* VueJS Endpoints */
Route::post('auth/login', 'AuthController@login');

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('auth/user', 'AuthController@user');
    Route::post('auth/logout', 'AuthController@logout');
    Route::get('users', 'UserController@index')->middleware('permission:' . \App\Laravue\Acl::PERMISSION_USER_MANAGE);
    Route::get('users/{user}', 'UserController@show')->middleware('permission:' . \App\Laravue\Acl::PERMISSION_USER_MANAGE);
    Route::put('users/{user}', 'UserController@update');
    Route::delete('users/{user}', 'UserController@destroy')->middleware('permission:' . \App\Laravue\Acl::PERMISSION_USER_MANAGE);
    Route::get('users/{user}/permissions', 'UserController@permissions')->middleware('permission:' . \App\Laravue\Acl::PERMISSION_PERMISSION_MANAGE);
    Route::put('users/{user}/permissions', 'UserController@updatePermissions')->middleware('permission:' . \App\Laravue\Acl::PERMISSION_PERMISSION_MANAGE);
    Route::apiResource('roles', 'RoleController')->middleware('permission:' . \App\Laravue\Acl::PERMISSION_PERMISSION_MANAGE);
    Route::get('roles/{role}/permissions', 'RoleController@permissions')->middleware('permission:' . \App\Laravue\Acl::PERMISSION_PERMISSION_MANAGE);
    Route::apiResource('permissions', 'PermissionController')->middleware('permission:' . \App\Laravue\Acl::PERMISSION_PERMISSION_MANAGE);
});

// Fake APIs
Route::get('/table/list', function () {
    $rowsNumber = mt_rand(20, 30);
    $data = [];
    for ($rowIndex = 0; $rowIndex < $rowsNumber; $rowIndex++) {
        $row = [
            'author' => Faker::randomString(mt_rand(5, 10)),
            'display_time' => Faker::randomDateTime()->format('Y-m-d H:i:s'),
            'id' => mt_rand(100000, 100000000),
            'pageviews' => mt_rand(100, 10000),
            'status' => Faker::randomInArray(['deleted', 'published', 'draft']),
            'title' => Faker::randomString(mt_rand(20, 50)),
        ];

        $data[] = $row;
    }

    return response()->json(new JsonResponse(['items' => $data]));
});

Route::get('/orders', function () {
    $rowsNumber = 8;
    $data = [];
    for ($rowIndex = 0; $rowIndex < $rowsNumber; $rowIndex++) {
        $row = [
            'order_no' => 'LARAVUE' . mt_rand(1000000, 9999999),
            'price' => mt_rand(10000, 999999),
            'status' => Faker::randomInArray(['success', 'pending']),
        ];

        $data[] = $row;
    }

    return response()->json(new JsonResponse(['items' => $data]));
});

Route::get('/articles', function () {
    $rowsNumber = 10;
    $data = [];
    for ($rowIndex = 0; $rowIndex < $rowsNumber; $rowIndex++) {
        $row = [
            'id' => mt_rand(100, 10000),
            'display_time' => Faker::randomDateTime()->format('Y-m-d H:i:s'),
            'title' => Faker::randomString(mt_rand(20, 50)),
            'author' => Faker::randomString(mt_rand(5, 10)),
            'comment_disabled' => Faker::randomBoolean(),
            'content' => Faker::randomString(mt_rand(100, 300)),
            'content_short' => Faker::randomString(mt_rand(30, 50)),
            'status' => Faker::randomInArray(['deleted', 'published', 'draft']),
            'forecast' => mt_rand(100, 9999) / 100,
            'image_uri' => 'https://via.placeholder.com/400x300',
            'importance' => mt_rand(1, 3),
            'pageviews' => mt_rand(10000, 999999),
            'reviewer' => Faker::randomString(mt_rand(5, 10)),
            'timestamp' => Faker::randomDateTime()->getTimestamp(),
            'type' => Faker::randomInArray(['US', 'VI', 'JA']),

        ];

        $data[] = $row;
    }

    return response()->json(new JsonResponse(['items' => $data, 'total' => mt_rand(1000, 10000)]));
});

Route::get('articles/{id}', function ($id) {
    $article = [
        'id' => $id,
        'display_time' => Faker::randomDateTime()->format('Y-m-d H:i:s'),
        'title' => Faker::randomString(mt_rand(20, 50)),
        'author' => Faker::randomString(mt_rand(5, 10)),
        'comment_disabled' => Faker::randomBoolean(),
        'content' => Faker::randomString(mt_rand(100, 300)),
        'content_short' => Faker::randomString(mt_rand(30, 50)),
        'status' => Faker::randomInArray(['deleted', 'published', 'draft']),
        'forecast' => mt_rand(100, 9999) / 100,
        'image_uri' => 'https://via.placeholder.com/400x300',
        'importance' => mt_rand(1, 3),
        'pageviews' => mt_rand(10000, 999999),
        'reviewer' => Faker::randomString(mt_rand(5, 10)),
        'timestamp' => Faker::randomDateTime()->getTimestamp(),
        'type' => Faker::randomInArray(['US', 'VI', 'JA']),

    ];

    return response()->json(new JsonResponse($article));
});

Route::get('articles/{id}/pageviews', function ($id) {
    $pageviews = [
        'PC' => mt_rand(10000, 999999),
        'Mobile' => mt_rand(10000, 999999),
        'iOS' => mt_rand(10000, 999999),
        'android' => mt_rand(10000, 999999),
    ];
    $data = [];
    foreach ($pageviews as $device => $pageview) {
        $data[] = [
            'key' => $device,
            'pv' => $pageview,
        ];
    }

    return response()->json(new JsonResponse(['pvData' => $data]));
});
/* VueJS Endpoints End*/

<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Laravue\Models\Role;
use App\Laravue\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function studentRegistration(Request $request)
    {

        $validator = Validator::make($request->input(), array(
            'password' => ['required', 'min:6'],
            'confirmPassword' => 'same:password',
        ));

        if ($validator->fails()) {
            return response()->json(['error' => true, 'messages' => $validator->errors(),], 422);
        } else {

            $params = $request->all();
            $user = User::create([
                'name' => $params['name'],
                'email' => $params['email'],
                'password' => Hash::make($params['password']),
                'year' => $params['year'],
                'semester' => $params['semester'],
                'program' => $params['program'],


            ]);

            $role = Role::findByName($params['role']);
            $user->syncRoles($role);

            return response()->json([
                'error'=>false,
                'message'=>"Registration Successful"
            ], 200);
        }
    }

    public function fetchUserProfile(Request $request)
    {
        return $request->user();
    }

}

<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $program = $request->input('program');
        $results = DB::table('courses')
            ->select('cource_id', 'course_name', 'course_description', 'program_code')
            ->where(['status' => 1])
            ->where(['program_code' => $program])
            ->orderBy('program_code', 'asc')
            ->get();

        $Response = array(
            'error' => false,
            'message' => 'Everything is Ok',
            'result' => $results
        );

        return $Response;
    }

    public function myCurrentCourses(Request $request)
    {
        $year = $request->input('year');
        $semester = $request->input('semester');
        $program = $request->input('program');
        $level = "Level: $year.$semester";

        $results = DB::table('courses')
            ->select('cource_id', 'course_name', 'course_description', 'program_code')
            ->where(['status' => 1])
            ->where(['year_of_study' => $year])
            ->where(['semester' => $semester])
            ->where(['program_code' => $program])
            ->orderBy('program_code', 'asc')
            ->get();

        $Response = array(
            'error' => false,
            'message' => 'Everything is Ok',
            'level'=>$level,
            'result' => $results
        );

        return $Response;
    }


}

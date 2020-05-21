<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    public function myResults(Request $request)
    {
        $reg_num = $request->input('reg_num');
        $program = $request->input('program');

        $results = DB::table('exams')
            ->select('course_id', 'course_work_mark', 'course_exam_mark', 'course_exam_grade')
            ->where(['reg_num' => $reg_num])
            ->where(['program_code' => $program])
            ->orderBy('course_id', 'asc')
            ->get();

        return array(
            'error' => false,
            'message' => 'Everything is Ok',
            'result' => $results
        );
    }

    public function myTimetable(Request $request)
    {
        $year = $request->input('year');
        $semester = $request->input('semester');
        $program = $request->input('program_code');

        $results = DB::table('timetables')
            ->select('program_code', 'course_id', 'year', 'semester', 'exam_date', 'exam_time', 'exam_venue', 'exam_duration')
            ->where(['year' => $year])
            ->where(['semester' => $semester])
            ->where(['program_code' => $program])
            ->orderBy('course_id', 'asc')
            ->get();

        return array(
            'error' => false,
            'message' => 'Everything is Ok',
            'result' => $results
        );
    }
}

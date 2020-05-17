<?php

use App\Exam;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reg_num = 'R111855J';
        $program_code = 'BMIS';

        $seed_exams = [

            [
                'id' => 1,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 111',
                'course_work_mark' => '16',
                'course_exam_mark' => '54',
                'course_exam_grade' => '2.2',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 2,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 112',
                'course_work_mark' => '12',
                'course_exam_mark' => '55',
                'course_exam_grade' => '2.2',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 3,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 113',
                'course_work_mark' => '14',
                'course_exam_mark' => '76',
                'course_exam_grade' => '1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 4,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 114',
                'course_work_mark' => '12',
                'course_exam_mark' => '65',
                'course_exam_grade' => '2.1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 5,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 115',
                'course_work_mark' => '18',
                'course_exam_mark' => '32',
                'course_exam_grade' => '3',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 6,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 116',
                'course_work_mark' => '16',
                'course_exam_mark' => '38',
                'course_exam_grade' => '2.2',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 7,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 117',
                'course_work_mark' => '12',
                'course_exam_mark' => '57',
                'course_exam_grade' => '2.1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 8,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 121',
                'course_work_mark' => '18',
                'course_exam_mark' => '76',
                'course_exam_grade' => '1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 9,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 122',
                'course_work_mark' => '16',
                'course_exam_mark' => '56',
                'course_exam_grade' => '2.1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 10,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 123',
                'course_work_mark' => '11',
                'course_exam_mark' => '65',
                'course_exam_grade' => '1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 11,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 124',
                'course_work_mark' => '16',
                'course_exam_mark' => '76',
                'course_exam_grade' => '1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 12,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 125',
                'course_work_mark' => '12',
                'course_exam_mark' => '65',
                'course_exam_grade' => '2.1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 13,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 126',
                'course_work_mark' => '15',
                'course_exam_mark' => '56',
                'course_exam_grade' => '2.1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 14,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 211',
                'course_work_mark' => '15',
                'course_exam_mark' => '65',
                'course_exam_grade' => '1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 15,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 212',
                'course_work_mark' => '14',
                'course_exam_mark' => '36',
                'course_exam_grade' => '3',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 16,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 213',
                'course_work_mark' => '14',
                'course_exam_mark' => '67',
                'course_exam_grade' => '1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 17,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 214',
                'course_work_mark' => '13',
                'course_exam_mark' => '56',
                'course_exam_grade' => '2.1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 18,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 215',
                'course_work_mark' => '12',
                'course_exam_mark' => '45',
                'course_exam_grade' => '2.2',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 19,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 216',
                'course_work_mark' => '13',
                'course_exam_mark' => '65',
                'course_exam_grade' => '1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 20,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 221',
                'course_work_mark' => '16',
                'course_exam_mark' => '60',
                'course_exam_grade' => '1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 21,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 222',
                'course_work_mark' => '16',
                'course_exam_mark' => '45',
                'course_exam_grade' => '3',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 22,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 223',
                'course_work_mark' => '16',
                'course_exam_mark' => '45',
                'course_exam_grade' => '2.2',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 23,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 224',
                'course_work_mark' => '16',
                'course_exam_mark' => '34',
                'course_exam_grade' => '3',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 25,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 225',
                'course_work_mark' => '14',
                'course_exam_mark' => '54',
                'course_exam_grade' => '2.1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 26,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 226',
                'course_work_mark' => '14',
                'course_exam_mark' => '45',
                'course_exam_grade' => '3',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 27,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 331',
                'course_work_mark' => '16',
                'course_exam_mark' => '68',
                'course_exam_grade' => '1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 28,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 332',
                'course_work_mark' => '18',
                'course_exam_mark' => '65',
                'course_exam_grade' => '1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 29,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 333',
                'course_work_mark' => '18',
                'course_exam_mark' => '65',
                'course_exam_grade' => '1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 30,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 411',
                'course_work_mark' => '12',
                'course_exam_mark' => '65',
                'course_exam_grade' => '1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 31,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 412',
                'course_work_mark' => '12',
                'course_exam_mark' => '64',
                'course_exam_grade' => '1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 32,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 413',
                'course_work_mark' => '16',
                'course_exam_mark' => '54',
                'course_exam_grade' => '2.1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 33,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 414',
                'course_work_mark' => '11',
                'course_exam_mark' => '65',
                'course_exam_grade' => '1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 34,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 415',
                'course_work_mark' => '16',
                'course_exam_mark' => '47',
                'course_exam_grade' => '2.1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 35,
                'reg_num' => $reg_num,
                'program_code' => $program_code,
                'course_id' => 'BMIS 416',
                'course_work_mark' => '16',
                'course_exam_mark' => '55',
                'course_exam_grade' => '2.1',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ]


        ];

        Exam::insert($seed_exams);
    }
}

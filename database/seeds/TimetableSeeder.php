<?php

use App\Timetable;
use Illuminate\Database\Seeder;

class TimetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $seed_exams = [

            [
                'id' => 1,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 115',
                'year' => '1',
                'semester' => '1',
                'exam_date' => '06/05/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 2,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 114',
                'year' => '1',
                'semester' => '1',
                'exam_date' => '07/05/20',
                'exam_time' => '1400hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 3,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 112',
                'year' => '1',
                'semester' => '1',
                'exam_date' => '04/05/20',
                'exam_time' => '1400hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 4,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 116',
                'year' => '1',
                'semester' => '1',
                'exam_date' => '27/04/20',
                'exam_time' => '1400hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 5,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 113',
                'year' => '1',
                'semester' => '1',
                'exam_date' => '28/04/20',
                'exam_time' => '1400hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 6,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 117',
                'year' => '1',
                'semester' => '1',
                'exam_date' => '05/05/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 7,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 125',
                'year' => '1',
                'semester' => '2',
                'exam_date' => '04/05/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 8,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 126',
                'year' => '1',
                'semester' => '2',
                'exam_date' => '05/05/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 9,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 121',
                'year' => '1',
                'semester' => '2',
                'exam_date' => '30/04/20',
                'exam_time' => '1400hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],


            [
                'id' => 10,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 123',
                'year' => '1',
                'semester' => '2',
                'exam_date' => '07/05/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 11,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 124',
                'year' => '1',
                'semester' => '2',
                'exam_date' => '29/04/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 12,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 122',
                'year' => '1',
                'semester' => '2',
                'exam_date' => '08/05/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            /*
             //@TODO Gender Was Not Found On Thew Default Module List
             [
                'id' => 13,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 127',
                'year' => '1',
                'semester' => '2',
                'exam_date' => '06/05/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '2hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],*/

            [
                'id' => 14,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 211',
                'year' => '2',
                'semester' => '1',
                'exam_date' => '27/04/20',
                'exam_time' => '1400hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 15,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 214',
                'year' => '2',
                'semester' => '1',
                'exam_date' => '28/04/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 16,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 212',
                'year' => '2',
                'semester' => '1',
                'exam_date' => '30/04/20',
                'exam_time' => '1400hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 17,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 213',
                'year' => '2',
                'semester' => '1',
                'exam_date' => '05/05/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 18,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 216',
                'year' => '2',
                'semester' => '1',
                'exam_date' => '04/05/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 19,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 215',
                'year' => '2',
                'semester' => '1',
                'exam_date' => '29/04/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 20,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 221',
                'year' => '2',
                'semester' => '2',
                'exam_date' => '27/04/20',
                'exam_time' => '1400hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 21,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 222',
                'year' => '2',
                'semester' => '2',
                'exam_date' => '30/04/20',
                'exam_time' => '1400hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 22,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 223',
                'year' => '2',
                'semester' => '2',
                'exam_date' => '28/04/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 23,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 225',
                'year' => '2',
                'semester' => '2',
                'exam_date' => '29/04/30',
                'exam_time' => '1400hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 25,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 224',
                'year' => '2',
                'semester' => '2',
                'exam_date' => '04/05/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 26,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 411',
                'year' => '4',
                'semester' => '1',
                'exam_date' => '06/05/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 27,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 415',
                'year' => '4',
                'semester' => '1',
                'exam_date' => '29/04/20',
                'exam_time' => '1400hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 28,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 412',
                'year' => '4',
                'semester' => '1',
                'exam_date' => '04/05/20',
                'exam_time' => '1400hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 29,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 414',
                'year' => '4',
                'semester' => '1',
                'exam_date' => '30/04/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 30,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 416',
                'year' => '4',
                'semester' => '1',
                'exam_date' => '05/05/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 31,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 413',
                'year' => '4',
                'semester' => '1',
                'exam_date' => '27/04/20',
                'exam_time' => '1400hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 32,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 421',
                'year' => '4',
                'semester' => '2',
                'exam_date' => '27/04/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 33,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 423',
                'year' => '4',
                'semester' => '2',
                'exam_date' => '28/04/20',
                'exam_time' => '1400hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 34,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 424',
                'year' => '4',
                'semester' => '2',
                'exam_date' => '29/04/20',
                'exam_time' => '0900hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 35,
                'program_code' => 'BMIS',
                'course_id' => 'BMIS 422',
                'year' => '4',
                'semester' => '2',
                'exam_date' => '04/05/20',
                'exam_time' => '1400hrs',
                'exam_venue' => 'TBA',
                'exam_duration' => '3hrs',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ]

        ];

        Timetable::insert($seed_exams);
    }
}

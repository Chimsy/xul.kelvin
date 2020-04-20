<?php

use App\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seed_programs = [

            [
                'id' => 1,
                'program_code' => 'BMIS',
                'program_name' => 'BSC Management Honors Information Systems Degree',
                'program_price' => 20000,
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 2,
                'program_code' => 'DTEL',
                'program_name' => 'Diploma in Telecomunications Engineering',
                'program_price' => 15000,
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 3,
                'program_code' => 'DNEP',
                'program_name' => 'Diploma in Networking and Pc Engineering',
                'program_price' => 15000,
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 4,
                'program_code' => 'CEH',
                'program_name' => 'Certificate in Certified Ethical Hacking',
                'program_price' => 18000,
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 5,
                'program_code' => 'DMIS',
                'program_name' => 'Diploma in Management Information Systems',
                'program_price' => 18500,
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 6,
                'program_code' => 'DTM',
                'program_name' => 'Diploma in Tourism Management',
                'program_price' => 15000,
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 7,
                'program_code' => 'ABA',
                'program_name' => 'Diploma in Aplied Business Administration',
                'program_price' => 15500,
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 8,
                'program_code' => 'MMA',
                'program_name' => 'Diploma in Marketing Managemet',
                'program_price' => 17500,
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 9,
                'program_code' => 'DPM',
                'program_name' => 'Diploma in Project Management',
                'program_price' => 12000,
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 10,
                'program_code' => 'DOA',
                'program_name' => 'Diploma in Office Administration',
                'program_price' => 12000,
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],
            [
                'id' => 11,
                'program_code' => 'BCSD',
                'program_name' => 'British Computer Society Diploma in I.T',
                'program_price' => 50000,
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 12,
                'program_code' => 'BCSG',
                'program_name' => 'British Computer Society Profesional Graduate in I.T',
                'program_price' => 65000,
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],


        ];

        Program::insert($seed_programs);    }
}

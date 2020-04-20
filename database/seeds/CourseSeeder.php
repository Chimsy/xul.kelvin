<?php

use App\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seed_courses = [

            [
                'id' => 1,
                'cource_id' => 'BMIS111',
                'course_name' => 'Introduction to Computers and Computer Applications',
                'course_description' => 'Basic computer operation and knowledge',
                'year_of_study' => '1',
                'semester' => '1',
                'course_exam_date' => '2020-01-04 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 2,
                'cource_id' => 'BMIS112',
                'course_name' => 'Navigating The Information Superhighway',
                'course_description' => 'How information is handled',
                'year_of_study' => '1',
                'semester' => '1',
                'course_exam_date' => '2020-01-05 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 3,
                'cource_id' => 'BMIS 113',
                'course_name' => 'Mathematical Methods',
                'course_description' => 'Basic methods for calculating statistics',
                'year_of_study' => '1',
                'semester' => '1',
                'course_exam_date' => '2020-01-06 14:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 4,
                'cource_id' => 'BMIS 114',
                'course_name' => 'Financial Accounting',
                'course_description' => 'Basic accounting principles and knowledge',
                'year_of_study' => '1',
                'semester' => '1',
                'course_exam_date' => '2020-01-06 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 5,
                'cource_id' => 'BMIS 115',
                'course_name' => 'Introduction to Computer Programming (C Programming)',
                'course_description' => 'Basic programming skills and concepts',
                'year_of_study' => '1',
                'semester' => '1',
                'course_exam_date' => '2020-01-07 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 6,
                'cource_id' => 'BMIS 116',
                'course_name' => 'Principles of Marketing',
                'course_description' => 'Basic concepts in marketing',
                'year_of_study' => '1',
                'semester' => '1',
                'course_exam_date' => '2020-01-08 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 7,
                'cource_id' => 'BMIS 117',
                'course_name' => 'Communication Skills',
                'course_description' => 'Basic skills for communication',
                'year_of_study' => '1',
                'semester' => '1',
                'course_exam_date' => '2020-01-09 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 8,
                'cource_id' => 'BMIS 121',
                'course_name' => 'Introduction to Information Systems',
                'course_description' => 'What are informations systems and their importance in business',
                'year_of_study' => '1',
                'semester' => '2',
                'course_exam_date' => '2020-01-11 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 9,
                'cource_id' => 'BMIS 122',
                'course_name' => 'Operating Sysytems',
                'course_description' => 'Importance of operating systems and mechanism',
                'year_of_study' => '1',
                'semester' => '2',
                'course_exam_date' => '2020-01-12 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 10,
                'cource_id' => 'BMIS 123',
                'course_name' => 'Database Systems for Business',
                'course_description' => 'Introduction to database systems',
                'year_of_study' => '1',
                'semester' => '2',
                'course_exam_date' => '2020-01-13 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 11,
                'cource_id' => 'BMIS 124',
                'course_name' => 'Advanced Programming (Visual Basic)',
                'course_description' => 'Basic Interface designing skills using .net frameworks',
                'year_of_study' => '1',
                'semester' => '2',
                'course_exam_date' => '2020-01-14 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 12,
                'cource_id' => 'BMIS 125',
                'course_name' => 'Introduction to Computer Architecture',
                'course_description' => 'Looks at the mechanism of a computer and its components',
                'year_of_study' => '1',
                'semester' => '2',
                'course_exam_date' => '2020-01-15 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 13,
                'cource_id' => 'BMIS 126',
                'course_name' => 'Data Communications and Computer Networks',
                'course_description' => 'How computing devices  communicate and networked',
                'year_of_study' => '1',
                'semester' => '2',
                'course_exam_date' => '2020-01-16 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 14,
                'cource_id' => 'BMIS 211',
                'course_name' => 'System Analysis and Design',
                'course_description' => 'Sytem analysing skills and design',
                'year_of_study' => '2',
                'semester' => '1',
                'course_exam_date' => '2020-01-15 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 15,
                'cource_id' => 'BMIS 212',
                'course_name' => 'Object Oriented Programming 1 (C#)',
                'course_description' => 'Computer Programming based on the object and object representation using C#',
                'year_of_study' => '2',
                'semester' => '1',
                'course_exam_date' => '2020-01-04 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 16,
                'cource_id' => 'BMIS 213',
                'course_name' => 'E- Commerce',
                'course_description' => 'How business is run and conducted online',
                'year_of_study' => '2',
                'semester' => '1',
                'course_exam_date' => '2020-01-05 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 17,
                'cource_id' => 'BMIS 214',
                'course_name' => 'Human Computer Interaction',
                'course_description' => 'How humans intract with computing devices and user interface design',
                'year_of_study' => '2',
                'semester' => '1',
                'course_exam_date' => '2020-01-06 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 18,
                'cource_id' => 'BMIS 215',
                'course_name' => 'Information Systems Project Management',
                'course_description' => 'How to manage information for successful busines projects ',
                'year_of_study' => '2',
                'semester' => '1',
                'course_exam_date' => '2020-01-06 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 19,
                'cource_id' => 'BMIS 216',
                'course_name' => 'Managerial Accounting and Finance',
                'course_description' => 'Essence and concepts of managerial accounting skills for a business',
                'year_of_study' => '2',
                'semester' => '1',
                'course_exam_date' => '2020-01-07 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 20,
                'cource_id' => 'BMIS 221',
                'course_name' => 'Enterprenuership',
                'course_description' => 'How to become an enterprenuer and apply enterprenuireship skills',
                'year_of_study' => '2',
                'semester' => '2',
                'course_exam_date' => '2020-01-08 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 21,
                'cource_id' => 'BMIS 222',
                'course_name' => 'Research Skills',
                'course_description' => 'How to be a researcher and apply research skills to gain infromation',
                'year_of_study' => '2',
                'semester' => '2',
                'course_exam_date' => '2020-01-09 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 22,
                'cource_id' => 'BMIS 223',
                'course_name' => 'Advanced Data Communications and Computer Networks',
                'course_description' => 'How computing devices  communicate on a network',
                'year_of_study' => '2',
                'semester' => '2',
                'course_exam_date' => '2020-01-10 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 23,
                'cource_id' => 'BMIS 224',
                'course_name' => 'Internet Programming',
                'course_description' => 'Basic Internet programming skill using HTML, PHP, JS',
                'year_of_study' => '2',
                'semester' => '2',
                'course_exam_date' => '2020-01-11 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 24,
                'cource_id' => 'BMIS 225',
                'course_name' => 'Expert & Knowledge Based Systems',
                'course_description' => 'What are expert systems and their role in todays lives',
                'year_of_study' => '2',
                'semester' => '2',
                'course_exam_date' => '2020-01-14 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 25,
                'cource_id' => 'BMIS 226',
                'course_name' => 'Project I',
                'course_description' => 'A write up on a specific topic addressing a problem at hand using the knowledge acquired in year 1 and 2',
                'year_of_study' => '2',
                'semester' => '2',
                'course_exam_date' => '2020-01-15 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 26,
                'cource_id' => 'BMIS 331',
                'course_name' => 'Work Related Learning Student Report',
                'course_description' => 'A write up on a the orgnaisations structure and knowledge attained during the learning placement period ',
                'year_of_study' => '3',
                'semester' => '2',
                'course_exam_date' => '2020-01-04 14:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 27,
                'cource_id' => 'BMIS 332',
                'course_name' => 'Work Related Learning Supervision Report',
                'course_description' => 'Assessment of the Supervisor purtaining to the student',
                'year_of_study' => '3',
                'semester' => '2',
                'course_exam_date' => '2020-01-04 14:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 28,
                'cource_id' => 'BMIS 333',
                'course_name' => 'Work Related Learning Employer\'s Report',
                'course_description' => 'A write up of the Employer purtaining to the student',
                'year_of_study' => '3',
                'semester' => '2',
                'course_exam_date' => '2020-01-04 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 29,
                'cource_id' => 'BMIS 411',
                'course_name' => 'Computer Graphics',
                'course_description' => 'Learning basic computer graphical design and its evolution',
                'year_of_study' => '4',
                'semester' => '1',
                'course_exam_date' => '2020-01-04 14:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 30,
                'cource_id' => 'BMIS 412',
                'course_name' => 'Object Oriented Programming 2 (Java Programming)',
                'course_description' => 'Computer Object Oriented Programming using Java Language',
                'year_of_study' => '4',
                'semester' => '1',
                'course_exam_date' => '2020-01-04 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 31,
                'cource_id' => 'BMIS 413',
                'course_name' => 'Embeded Systems Design',
                'course_description' => 'How smallest units or components of computing devices are designed',
                'year_of_study' => '4',
                'semester' => '1',
                'course_exam_date' => '2020-01-05 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 32,
                'cource_id' => 'BMIS 414',
                'course_name' => 'Information Technology Management',
                'course_description' => 'Informations Technology systems management in businesses',
                'year_of_study' => '4',
                'semester' => '1',
                'course_exam_date' => '2020-01-05 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 33,
                'cource_id' => 'BMIS 415',
                'course_name' => 'Computer Security',
                'course_description' => 'Computer Security and Informantion',
                'year_of_study' => '4',
                'semester' => '1',
                'course_exam_date' => '2020-01-06 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 34,
                'cource_id' => 'BMIS 416',
                'course_name' => 'Advanced Software Engineering',
                'course_description' => 'How  to develop software and software management',
                'year_of_study' => '4',
                'semester' => '1',
                'course_exam_date' => '2020-01-07 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 35,
                'cource_id' => 'BMIS 421',
                'course_name' => 'Applications of Database Systems',
                'course_description' => 'Concepts on how to apply and desgn databases for busines',
                'year_of_study' => '4',
                'semester' => '2',
                'course_exam_date' => '2020-01-08 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 36,
                'cource_id' => 'BMIS 422',
                'course_name' => 'Strategic Management',
                'course_description' => 'Concepts in Strategy implimentation and Management',
                'year_of_study' => '4',
                'semester' => '2',
                'course_exam_date' => '2020-01-04 14:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 37,
                'cource_id' => 'BMIS 423',
                'course_name' => 'Contemporary Issues in Information Systems Management',
                'course_description' => 'Issues in using or dealing with Information Systems',
                'year_of_study' => '4',
                'semester' => '2',
                'course_exam_date' => '2020-01-04 14:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 38,
                'cource_id' => 'BMIS 424',
                'course_name' => 'Distributed Systems',
                'course_description' => 'The  inter-conectivity of systems and structure',
                'year_of_study' => '4',
                'semester' => '2',
                'course_exam_date' => '2020-01-06 14:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 39,
                'cource_id' => 'BMIS 425',
                'course_name' => 'Project II',
                'course_description' => 'A write up on a specific topic addressing a problem at hand using IT skills',
                'year_of_study' => '4',
                'semester' => '2',
                'course_exam_date' => '2020-01-11 08:00:00',
                'program_code' => 'BMIS',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 40,
                'cource_id' => 'DTEL 111',
                'course_name' => 'Introduction to Computers and Computer Applications',
                'course_description' => 'Basic computer operation and knowledge',
                'year_of_study' => '1',
                'semester' => '1',
                'course_exam_date' => '2020-01-04 08:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 41,
                'cource_id' => 'DTEL 112',
                'course_name' => 'Navigating the Information Superhighway',
                'course_description' => 'How information is handled',
                'year_of_study' => '1',
                'semester' => '1',
                'course_exam_date' => '2020-01-05 08:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 42,
                'cource_id' => 'DTEL 113',
                'course_name' => 'Mathematical Methods',
                'course_description' => 'Basic methods for calculating statistics',
                'year_of_study' => '1',
                'semester' => '1',
                'course_exam_date' => '2020-01-05 08:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 43,
                'cource_id' => 'DTEL 114',
                'course_name' => 'Financial Accounting',
                'course_description' => 'Basic accounting principles and knowledge',
                'year_of_study' => '1',
                'semester' => '1',
                'course_exam_date' => '2020-01-05 08:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 44,
                'cource_id' => 'DTEL 115',
                'course_name' => 'Introduction to Computer Programming (C Programming)',
                'course_description' => 'Basic programming skills and concepts',
                'year_of_study' => '1',
                'semester' => '1',
                'course_exam_date' => '2020-01-05 14:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 45,
                'cource_id' => 'DTEL 116',
                'course_name' => 'Principles of Marketing',
                'course_description' => 'Basic concepts in marketing',
                'year_of_study' => '1',
                'semester' => '1',
                'course_exam_date' => '2020-01-06 08:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 46,
                'cource_id' => 'DTEL 117',
                'course_name' => 'Gender Studies',
                'course_description' => 'Basic skills',
                'year_of_study' => '1',
                'semester' => '1',
                'course_exam_date' => '2020-01-07 08:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 66,
                'cource_id' => 'DTEL 121',
                'course_name' => 'Operating Sysytems',
                'course_description' => 'Importance of operating systems and mechanism',
                'year_of_study' => '1',
                'semester' => '2',
                'course_exam_date' => '2020-01-08 08:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 47,
                'cource_id' => 'DTEL 122',
                'course_name' => 'Database Systems for Business',
                'course_description' => 'Introduction to database systems',
                'year_of_study' => '1',
                'semester' => '2',
                'course_exam_date' => '2020-01-04 14:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 48,
                'cource_id' => 'DTEL 123',
                'course_name' => 'Advanced Programming (Visual Basic)',
                'course_description' => 'Basic Interface designing skills using .net frameworks',
                'year_of_study' => '1',
                'semester' => '2',
                'course_exam_date' => '2020-01-04 14:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 49,
                'cource_id' => 'DTEL 124',
                'course_name' => 'Introduction to Computer Architecture',
                'course_description' => 'Looks at the mechanism of a computer and its components',
                'year_of_study' => '1',
                'semester' => '2',
                'course_exam_date' => '2020-01-04 14:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 50,
                'cource_id' => 'DTEL 125',
                'course_name' => 'Data Communications and Computer Networks',
                'course_description' => 'How computing devices  communicate and networked',
                'year_of_study' => '1',
                'semester' => '2',
                'course_exam_date' => '2020-01-04 14:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 51,
                'cource_id' => 'DTEL 211',
                'course_name' => 'Work Related Learning Student Report',
                'course_description' => 'A write up on a the orgnaisations structure and knowledge attained during the learning placement period ',
                'year_of_study' => '2',
                'semester' => '2',
                'course_exam_date' => '2020-01-04 08:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 52,
                'cource_id' => 'DTEL 222',
                'course_name' => 'Work Related Learning Supervision Report',
                'course_description' => 'Assessment of the Supervisor purtaining to the student',
                'year_of_study' => '2',
                'semester' => '2',
                'course_exam_date' => '2020-01-05 08:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 53,
                'cource_id' => 'DTEL 223',
                'course_name' => 'Work Related Learning Employer\'s Report',
                'course_description' => 'A write up of the Employer purtaining to the student',
                'year_of_study' => '2',
                'semester' => '2',
                'course_exam_date' => '2020-01-06 08:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 54,
                'cource_id' => 'DTEL 311',
                'course_name' => 'System Analysis and Design',
                'course_description' => 'Sytem analysing skills and design',
                'year_of_study' => '3',
                'semester' => '1',
                'course_exam_date' => '2020-01-07 08:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 55,
                'cource_id' => 'DTEL 312',
                'course_name' => 'Object Oriented Programming 1 (C#)',
                'course_description' => 'Computer Programming based on the object and object representation using C#',
                'year_of_study' => '3',
                'semester' => '1',
                'course_exam_date' => '2020-01-08 08:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 56,
                'cource_id' => 'DTEL 313',
                'course_name' => 'E- Commerce',
                'course_description' => 'How business is run and conducted online',
                'year_of_study' => '3',
                'semester' => '1',
                'course_exam_date' => '2020-01-09 08:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 57,
                'cource_id' => 'DTEL 314',
                'course_name' => 'Human Computer Interaction',
                'course_description' => 'How humans intract with computing devices and user interface design',
                'year_of_study' => '3',
                'semester' => '1',
                'course_exam_date' => '2020-01-10 08:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 58,
                'cource_id' => 'DTEL 315',
                'course_name' => 'Information Systems Project Management',
                'course_description' => 'How to manage information for successful busines projects ',
                'year_of_study' => '3',
                'semester' => '1',
                'course_exam_date' => '2020-01-04 14:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 59,
                'cource_id' => 'DTEL 316',
                'course_name' => 'Managerial Accounting and Finance',
                'course_description' => 'Essence and concepts of managerial accounting skills for a business',
                'year_of_study' => '3',
                'semester' => '1',
                'course_exam_date' => '2020-01-04 14:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 60,
                'cource_id' => 'DTEL 321',
                'course_name' => 'Enterprenuership',
                'course_description' => 'How to become an enterprenuer and apply enterprenuireship skills',
                'year_of_study' => '3',
                'semester' => '2',
                'course_exam_date' => '2020-01-05 14:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 62,
                'cource_id' => 'DTEL 322',
                'course_name' => 'Research Skills',
                'course_description' => 'How to be a researcher and apply research skills to gain infromation',
                'year_of_study' => '3',
                'semester' => '2',
                'course_exam_date' => '2020-01-06 14:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 63,
                'cource_id' => 'DTEL 323',
                'course_name' => 'Advanced Data Communications and Computer Networks',
                'course_description' => 'How computing devices  communicate on a network',
                'year_of_study' => '3',
                'semester' => '2',
                'course_exam_date' => '2020-01-04 08:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 64,
                'cource_id' => 'DTEL 324',
                'course_name' => 'Internet Programming / Network programming',
                'course_description' => 'Basic Internet programming skill using HTML, PHP, JS',
                'year_of_study' => '3',
                'semester' => '2',
                'course_exam_date' => '2020-01-05 08:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 65,
                'cource_id' => 'DTEL 325',
                'course_name' => 'Expert & Knowledge Based Systems',
                'course_description' => 'What are expert systems and their role in todays lives',
                'year_of_study' => '3',
                'semester' => '2',
                'course_exam_date' => '2020-01-06 08:00:00',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            /*[
                'id' => ,
                'cource_id' => '',
                'course_name' => '',
                'course_description' => '',
                'year_of_study' => '3',
                'semester' => '2',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],*/

            [
                'id' => 67,
                'cource_id' => 'DTEL 326',
                'course_name' => 'Project',
                'course_description' => 'A write up on a specific topic addressing a problem at hand using the knowledge acquired in year 1 and 2',
                'year_of_study' => '3',
                'semester' => '2',
                'course_exam_date' => '2020-01-07 03:45:16',
                'program_code' => 'DTEL',
                'status' => true,
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ]


        ];

        Course::insert($seed_courses);
    }
}

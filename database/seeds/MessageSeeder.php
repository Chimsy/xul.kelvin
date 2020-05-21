<?php

use App\Message;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $seed_message = [

            [
                'id' => 1,
                'msg_title' =>'This is a Private Message Title 1',
                'msg_body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'msg_state' => 0,
                'msg_type' => 'private',
                'reg_num' => 'R111855J',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 2,
                'msg_title' =>'This is a Public Message Title 1',
                'msg_body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'msg_state' => 1,
                'msg_type' => 'public',
                'reg_num' => 'R111855J',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 3,
                'msg_title' =>'This is a Public Message Title 2',
                'msg_body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'msg_state' => 1,
                'msg_type' => 'public',
                'reg_num' => 'R111855J',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 4,
                'msg_title' =>'This is a Public Message Title 3',
                'msg_body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'msg_state' => 1,
                'msg_type' => 'public',
                'reg_num' => 'R111855J',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 5,
                'msg_title' =>'This is a Public Message Title 4',
                'msg_body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'msg_state' => 1,
                'msg_type' => 'public',
                'reg_num' => 'R111855J',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],

            [
                'id' => 6,
                'msg_title' =>'This is a Private Message Title 2',
                'msg_body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'msg_state' => 0,
                'msg_type' => 'private',
                'reg_num' => 'R111855J',
                'created_at' => '2020-01-04 03:45:16',
                'updated_at' => '2020-01-04 03:45:16'
            ],


        ];

        Message::insert($seed_message);    }
}

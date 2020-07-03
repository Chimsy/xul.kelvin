<?php

use App\Laravue\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Laravue\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProgramSeeder::class,
            UsersTableSeeder::class,
            CourseSeeder::class,
            ExamSeeder::class,
            TimetableSeeder::class,
            MessageSeeder::class,
        ]);

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@laravue.dev',
            'password' => Hash::make('laravue'),
        ]);
/*        $manager = User::create([
            'name' => 'Manager',
            'email' => 'manager@laravue.dev',
            'password' => Hash::make('laravue'),
        ]);
        $editor = User::create([
            'name' => 'Editor',
            'email' => 'editor@laravue.dev',
            'password' => Hash::make('laravue'),
        ]);
        $user = User::create([
            'name' => 'User',
            'email' => 'user@laravue.dev',
            'password' => Hash::make('laravue'),
        ]);
        $visitor = User::create([
            'name' => 'Visitor',
            'email' => 'visitor@laravue.dev',
            'password' => Hash::make('laravue'),
        ]);*/

        $adminRole = Role::findByName(\App\Laravue\Acl::ROLE_ADMIN);
        $admin->syncRoles($adminRole);
        /*$managerRole = Role::findByName(\App\Laravue\Acl::ROLE_MANAGER);
        $editorRole = Role::findByName(\App\Laravue\Acl::ROLE_EDITOR);
        $userRole = Role::findByName(\App\Laravue\Acl::ROLE_STUDENT);
        $visitorRole = Role::findByName(\App\Laravue\Acl::ROLE_GUARDIAN);*/
        /*$manager->syncRoles($managerRole);
        $editor->syncRoles($editorRole);
        $user->syncRoles($userRole);
        $visitor->syncRoles($visitorRole);*/

    }
}

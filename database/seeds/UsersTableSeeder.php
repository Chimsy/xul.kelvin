<?php

use Illuminate\Database\Seeder;
use App\Laravue\Acl;
use App\Laravue\Models\Role;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Golden Chimusinde',
            'email' => 'goldenchimsy@gmail.com',
            'password' => Hash::make('#pass123'),
            "reg_num"=>"R111855J",
            'year' => '4',
            'semester' => '2',
            'program' => 'BMIS',
            'ecocash' => 35000,
            'zipit' => 50000,
            'created_at'=>'2020-04-20 12:36:22',
            'updated_at'=>'2020-04-20 12:36:22',
        ]);

        $userList = [
            "Adriana C. Ocampo Uria",
            "Albert Einstein",
            "Anna K. Behrensmeyer",
            "Blaise Pascal",
            "Caroline Herschel",
            "Cecilia Payne-Gaposchkin",
            "Chien-Shiung Wu",
            "Dorothy Hodgkin",
            "Edmond Halley",
            "Edwin Powell Hubble",
            "Elizabeth Blackburn",
            "Enrico Fermi",
            "Erwin Schroedinger",
            "Flossie Wong-Staal",
            "Frieda Robscheit-Robbins",
            "Geraldine Seydoux",
            "Gertrude B. Elion",
            "Ingrid Daubechies",
            "Jacqueline K. Barton",
            "Jane Goodall",
            "Jocelyn Bell Burnell",
            "Johannes Kepler",
            "Lene Vestergaard Hau",
            "Lise Meitner",
            "Lord Kelvin",
            "Maria Mitchell",
            "Marie Curie",
            "Max Born",
            "Max Planck",
            "Melissa Franklin",
            "Michael Faraday",
            "Mildred S. Dresselhaus",
            "Nicolaus Copernicus",
            "Niels Bohr",
            "Patricia S. Goldman-Rakic",
            "Patty Jo Watson",
            "Polly Matzinger",
            "Richard Phillips Feynman",
            "Rita Levi-Montalcini",
            "Rosalind Franklin",
            "Ruzena Bajcsy",
            "Sarah Boysen",
            "Shannon W. Lucid",
            "Shirley Ann Jackson",
            "Sir Ernest Rutherford",
            "Sir Isaac Newton",
            "Stephen Hawking",
            "Werner Karl Heisenberg",
            "Wilhelm Conrad Roentgen",
            "Wolfgang Ernst Pauli",
        ];

        foreach ($userList as $fullName) {
            $name = str_replace(' ', '.', $fullName);
            $roleName = \App\Laravue\Faker::randomInArray([
                Acl::ROLE_MANAGER,
                Acl::ROLE_EDITOR,
                Acl::ROLE_STUDENT,
                Acl::ROLE_GUARDIAN,
            ]);
            $user = \App\Laravue\Models\User::create([
                'name' => $fullName,
                'email' => strtolower($name) . '@laravue.dev',
                'password' => \Illuminate\Support\Facades\Hash::make('laravue'),
            ]);

            $role = Role::findByName($roleName);
            $user->syncRoles($role);
        }
    }
}

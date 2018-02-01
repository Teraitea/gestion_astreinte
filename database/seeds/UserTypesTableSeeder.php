<?php

use Illuminate\Database\Seeder;
use App\UserType;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usertypes = [
            
            [
                "name" => "Super-Administrateur"
            ],

            [
                "name" => "Utilisateur"
            ]
        
        ];

    foreach($usertypes AS $usertype):
            UserType::create($usertype);
    endforeach;
    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
            "lastname" => "Tarihaa",
            "firstname" => "Teraitea",
            "email" => "teraitea.tarihaa@hotmail.fr",
            "password" => bcrypt("teraitea"),
            "user_type_id" => 1
        ],
        [
            "lastname" => "Hauata",
            "firstname" => "Sabrina",
            "email" => "sabrina.hauata@hotmail.fr",
            "password" => bcrypt("sabrina"),
            "user_type_id" => 2
        ]];

        foreach($users as $user):
            User::create($user);
        endforeach;
    }
}

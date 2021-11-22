<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        $data = [
            'name' =>$faker->name,
            'email'=>$faker->email,
            'password'=>'123456',
            'phoneNum'=>$faker->phoneNumber,
            'userLevel'=>'1',
        ];

        User::create($data);
    }
}

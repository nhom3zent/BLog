<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 50; $i++) { 
        	DB::table('users')->insert([
        	'name' => $faker->firstName,
        	'email' => $faker->companyEmail,
        	'password' => $faker->password,
        	'created_at' => $faker->dateTimeThisYear,
        	'updated_at' => $faker->dateTimeThisYear,
            'role'  =>rand(0,1)
        ]);
        }
    }
}

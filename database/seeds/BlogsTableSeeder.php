<?php

use Illuminate\Database\Seeder;
use Faker\Factory;


class BlogsTableSeeder extends Seeder
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
        	DB::table('blogs')->insert([
        	'name' => $faker->firstName,
        	'email' => $faker->companyEmail,
        	'mobile' => $faker->phoneNumber,
        	'title' => $faker->title,
        	'image' => $faker->imageUrl,
        	'description' => $faker->text,
        	'content' => $faker->text,
        	'created_at' => $faker->dateTimeThisYear,
        	'updated_at' => $faker->dateTimeThisYear
        	]);
        }
    }
}

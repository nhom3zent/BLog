<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
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
        	DB::table('tags')->insert([
        	'name' => $faker->firstName,
        	'created_at' => $faker->dateTimeThisYear,
        	'updated_at' => $faker->dateTimeThisYear
        	]);
        }
    }
}

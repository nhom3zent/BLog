<?php

use Illuminate\Database\Seeder;

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
        	'title' => $faker->title,
            'user_id'=>rand(1,10),
            'status'=>rand(0,1),
        	'image' => $faker->imageUrl,
        	'description' => $faker->text,
        	'content' => $faker->text,
        	'created_at' => $faker->dateTimeThisYear,
        	'updated_at' => $faker->dateTimeThisYear
        	]);
        }
    }
}

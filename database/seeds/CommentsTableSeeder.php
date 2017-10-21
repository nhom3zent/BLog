<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 30; $i++) { 
        	DB::table('comments')->insert([
        	'comment' => $faker->text,
            'user_id' =>rand(1,10),
            'blog_id' =>rand(1,10),
        	'created_at' => $faker->dateTimeThisYear,
        	'updated_at' => $faker->dateTimeThisYear
        	]);
        }
    }
}

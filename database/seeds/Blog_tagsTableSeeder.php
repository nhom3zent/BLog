<?php

use Illuminate\Database\Seeder;

class Blog_tagsTableSeeder extends Seeder
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
        	DB::table('blog_tags')->insert([
        	'tag_id' => rand(1,10),
        	'blog_id' => rand(1,10),
        	'created_at' => $faker->dateTimeThisYear,
        	'updated_at' => $faker->dateTimeThisYear
        	]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class Blog_categoryesTableSeeder extends Seeder
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
        	DB::table('blog_categoryes')->insert([
        	'blog_id' => rand(1,10),
        	'categoryes_id' => rand(1,10),
        	'created_at' => $faker->dateTimeThisYear,
        	'updated_at' => $faker->dateTimeThisYear
        	]);
	    }
    }
}

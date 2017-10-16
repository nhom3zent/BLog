<?php

use Illuminate\Database\Seeder;

class Blog_categoriesTableSeeder extends Seeder
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
        	DB::table('blog_categories')->insert([
        	'blog_id' => rand(1,10),
        	'categories_id' => rand(1,10),
        	'created_at' => $faker->dateTimeThisYear,
        	'updated_at' => $faker->dateTimeThisYear
        	]);
	    }
    }
}

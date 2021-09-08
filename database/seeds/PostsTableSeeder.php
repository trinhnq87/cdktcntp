<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
    	for($i=0; $i<10; ++$i){
    		Post::create([
    			'title'=>$faker->sentence,
    			'slug'=>$faker->slug,
    			'introtext'=>implode(' ',$faker->sentences(4)),
    			'thumbnail'=>$faker->imageUrl($width = 330, $height = 165),
    			'content'=>implode(' ',$faker->sentences(4)),
    			'views'=>$faker->numberBetween($min=1, $max=100),
    			'category_id'=>$faker->numberBetween($min=1, $max=2),
    			'user_id'=>$faker->numberBetween($min=1, $max=3),
    			'group'=>$faker->numberBetween($min=1, $max=2)
    		]);
    	}
    }
}

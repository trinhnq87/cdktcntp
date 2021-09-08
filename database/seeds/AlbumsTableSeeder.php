<?php

use Illuminate\Database\Seeder;
use App\Album;
class AlbumsTableSeeder extends Seeder
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
    		Album::create([
    			'name'=>$faker->sentence,
    			'slug'=>$faker->slug,
    			'user_id'=>$faker->numberBetween($min=1, $max=3)
    		]);
    	}
    }
}

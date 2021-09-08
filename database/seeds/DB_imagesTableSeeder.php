<?php

use Illuminate\Database\Seeder;
use App\DBimage;
class DB_imagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
    	$faker = Faker\Factory::create();
    	for($i=0; $i<30; ++$i){
    		DBimage::create([
    			'album_id'=>$faker->numberBetween($min=1, $max=10),
    			'image_name'=>$faker->slug,
    			'image_url'=>$faker->imageUrl($width = 330, $height = 165),
    			'user_id'=>$faker->numberBetween($min=1, $max=3)
    		]);
    	}
    }
}

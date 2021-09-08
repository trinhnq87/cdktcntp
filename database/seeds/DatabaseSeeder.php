<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();
    /*	$this->call(PostsTableSeeder::class);
        $this->call(AlbumsTableSeeder::class);*/
        $this->call(DB_imagesTableSeeder::class);
    	Model::reguard();
    }
}

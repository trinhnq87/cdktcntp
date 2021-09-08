<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';
	protected $fillable = [
		'name',
		'slug',
		'album_thumb'
	];
	public function getImages(){
		return $this->hasMany('App\DBimage','album_id','id');
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DBimage extends Model
{
    protected $table = 'db_images';
	protected $fillable = [
		'album_id',
		'image_name',
		'image_url'
	];
	public function getAlbum(){
		return $this->belongsTo('App\Album','album_id','id');
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'category';
	protected $fillable = [
		'name',
		'slug'
	];
	public $timestamps = false;
	public function getPosts(){
		return $this->hasMany('App\Post','category_id','id');
	}
	public function getOtherPost(){
		return $this->hasMany('App\Post','category_id','id')->where('id','!=',$this->latestPost->id)->orderBy('id','desc')->limit(4);
	}
	public function latestPost(){
		return $this->hasOne('App\Post')->latest();
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'posts';
	protected $fillable = [
		'title',
		'slug',
		'introtext',
		'thumbnail',
		'content',
		'views',
		'category_id',
		'user_id',
		'group',
		'created_at'
	];
	public function getCategory(){
		return $this->belongsTo('App\Category','category_id','id');
	}
}

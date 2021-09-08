<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichTuan extends Model
{
    protected $table = 'lichtuan';
	protected $fillable = [
		'title',
		'slug',
		'content',
		'user_id'
	];
}

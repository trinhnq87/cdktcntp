<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VanBan extends Model
{
	protected $table = 'vanban';
	protected $fillable = [
		'sovb',
		'name',
		'limit_name',
		'slug',
		'url',
		'ngay_ban_hanh'
	];
}

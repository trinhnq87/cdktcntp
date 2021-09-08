<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BieuMau extends Model
{
    protected $table = 'bieumau';
	protected $fillable = [
		'name',
		'slug',
		'group',
		'url'
	];
}

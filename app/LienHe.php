<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LienHe extends Model
{
    protected $table = 'lienhe';
	protected $fillable = [
		'ho_va_ten',
		'sdt',
		'noi_dung',
		'user_id'
	];
}
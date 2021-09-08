<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hssv extends Model
{
    protected $table = 'hssv';
	protected $fillable = [
		'ma_lop',
		'khoa',
		'nganh_nghe_dtao',
		'khoa_hoc',
		'url',
		'user_id'
	];
	public function getUser(){
        return $this->belongsTo('App\User','user_id','id');
    }
}

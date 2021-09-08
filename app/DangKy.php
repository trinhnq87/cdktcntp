<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DangKy extends Model
{
	protected $table = 'dangkys';
	protected $fillable = [
		'ho_va_ten',
		'sdt',
		'ngay_sinh',
		'dia_chi',
		'truong',
		'tong_ket',
		'nganh_nghe'
	];
}

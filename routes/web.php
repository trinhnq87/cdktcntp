<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', [
	'as' => 'homepage',
	'uses' => 'PageController@home'
]);

Route::get('/ping',[
    'as'=>'ping',
    'uses'=>'PageController@ping'
]);

//Admin Pages
Route::group(['prefix'=>'admin','middleware'=>'CheckAdmin'], function() {
	Route::get('/',[
		'as'=>'admin.homepage',
		'uses'=>'PageController@homepage'
	]);
	//Post
	Route::get('/create-post',[
		'as'=>'post.create',
		'uses'=>'PostController@create'
	]);
	Route::post('/create-post',[
		'as'=>'post.store',
		'uses'=>'PostController@store'
	]);
	Route::get('/edit-post/{cat_slug}/{post_slug}.html',[
		'as'=>'post.edit',
		'uses'=>'PostController@edit'
	]);
	Route::post('/edit-post/{cat_slug}/{post_slug}.html',[
		'as'=>'post.update',
		'uses'=>'PostController@update'
	]);
	Route::get('/delete-post/{cat_slug}/{post_slug}.html',[
		'as'=>'post.destroy',
		'uses'=>'PostController@destroy'
	]);
	Route::get('/post-list',[
		'as'=>'post.list',
		'uses'=>'PostController@list'
	]);
	Route::delete('/multi_delete',[
		'as'=>'multi.delete',
		'uses'=>'PostController@multiDelete'
	]);
	//Category
	Route::get('/category-list',[
		'as'=>'category.list',
		'uses'=>'CategoryController@list'
	]);
	Route::post('/category-create',[
		'as'=>'category.create',
		'uses'=>'CategoryController@store'
	]);
	//Giới thiệu
	Route::get('/gioithieu-list',[
		'as'=>'gioithieu.list',
		'uses'=>'GioiThieuController@list'
	]);
	Route::get('/them-baiviet',[
		'as'=>'gioithieu.create',
		'uses'=>'GioiThieuController@create'
	]);
	Route::post('/them-baiviet',[
		'as'=>'gioithieu.store',
		'uses'=>'GioiThieuController@store'
	]);
	Route::get('/edit-baiviet/{baiviet_slug}.html',[
		'as'=>'gioithieu.edit',
		'uses'=>'GioiThieuController@edit'
	]);
	Route::post('/edit-baiviet/{baiviet_slug}.html',[
		'as'=>'gioithieu.update',
		'uses'=>'GioiThieuController@update'
	]);
	Route::get('/delete-baiviet/{baiviet_slug}.html',[
		'as'=>'gioithieu.destroy',
		'uses'=>'GioiThieuController@destroy'
	]);
	//Lịch  tuần
	Route::get('/them-lich',[
		'as'=>'lichtuan.create',
		'uses'=>'LichTuanController@create'
	]);
	Route::post('/them-lich',[
		'as'=>'lichtuan.store',
		'uses'=>'LichTuanController@store'
	]);
	Route::get('/edit-lichtuan/{lich_slug}.html',[
		'as'=>'lichtuan.edit',
		'uses'=>'LichTuanController@edit'
	]);
	Route::post('/edit-lichtuan/{lich_slug}.html',[
		'as'=>'lichtuan.update',
		'uses'=>'LichTuanController@update'
	]);
	Route::get('/delete-lichtuan/{lich_slug}.html',[
		'as'=>'lichtuan.destroy',
		'uses'=>'LichTuanController@destroy'
	]);
	Route::get('/danh-sach-lich',[
		'as'=>'lichtuan.all',
		'uses'=>'LichTuanController@all'
	]);
	Route::delete('/multi_delete_lichtuan',[
		'as'=>'multi.delete_lichtuan',
		'uses'=>'LichTuanController@multiDelete'
	]);
	//Album ảnh
	Route::get('/danh-sach-album',[
		'as'=>'album.all',
		'uses'=>'AlbumController@all'
	]);
	Route::get('/them-album',[
		'as'=>'album.create',
		'uses'=>'AlbumController@create'
	]);
	Route::post('/them-album',[
		'as'=>'album.store',
		'uses'=>'AlbumController@store'
	]);
	Route::get('/edit-album/{album_slug}.html',[
		'as'=>'album.edit',
		'uses'=>'AlbumController@edit'
	]);
	Route::post('/edit-album/{album_slug}.html',[
		'as'=>'album.update',
		'uses'=>'AlbumController@update'
	]);
	Route::get('/delete-album/{album_slug}.html',[
		'as'=>'album.destroy',
		'uses'=>'AlbumController@destroy'
	]);
	//Xử lý ảnh trong Album
	Route::get('/add-image',[
		'as'=>'image.add',
		'uses'=>'AlbumController@add'
	]);
	Route::post('/add-image',[
		'as'=>'image.store',
		'uses'=>'AlbumController@image_store'
	]);
	Route::get('/album/{album_slug}',[
		'as'=>'image.list',
		'uses'=>'AlbumController@list_img'
	]);
	Route::get('/delete-image/{image_id}',[
		'as'=>'image.destroy',
		'uses'=>'AlbumController@destroy_image'
	]);
	//Xử lý văn bản
	Route::get('/them-vanban',[
		'as'=>'vanban.add',
		'uses'=>'VanBanController@add'
	]);
	Route::post('/them-vanban',[
		'as'=>'vanban.store',
		'uses'=>'VanBanController@store'
	]);
	Route::get('/edit-vanban/{vanban_slug}.html',[
		'as'=>'vanban.edit',
		'uses'=>'VanBanController@edit'
	]);
	Route::post('/edit-vanban/{vanban_slug}.html',[
		'as'=>'vanban.update',
		'uses'=>'VanBanController@update'
	]);
	Route::get('/delete-vanban/{vanban_id}',[
		'as'=>'vanban.destroy',
		'uses'=>'VanBanController@destroy'
	]);
	//Xử lý biểu mẫu
	Route::get('/them-bieumau',[
		'as'=>'bieumau.add',
		'uses'=>'BieuMauController@add'
	]);
	Route::post('/them-bieumau',[
		'as'=>'bieumau.store',
		'uses'=>'BieuMauController@store'
	]);
	Route::get('/edit-bieumau/{bieumau_slug}.html',[
		'as'=>'bieumau.edit',
		'uses'=>'BieuMauController@edit'
	]);
	Route::post('/edit-bieumau/{bieumau_slug}.html',[
		'as'=>'bieumau.update',
		'uses'=>'BieuMauController@update'
	]);
	Route::get('/delete-bieumau/{bieumau_id}',[
		'as'=>'bieumau.destroy',
		'uses'=>'BieuMauController@destroy'
	]);
	//Thêm danh sách HSSV
	Route::get('/them-hssv',[
		'as'=>'hssv.add',
		'uses'=>'HssvController@add'
	]);
	Route::post('/them-hssv',[
		'as'=>'hssv.store',
		'uses'=>'HssvController@store'
	]);
	//Liên hệ	
	Route::get('/ds-lien-he',[
		'as'=>'lien_he.all',
		'uses'=>'LienHeController@all'
	]);
	Route::get('/delete/lien-he/{id}',[
		'as'=>'lien_he.destroy',
		'uses'=>'LienHeController@destroy'
	]);
	//Đăng ký trực tuyến
	Route::get('/ds-dang-ky',[
		'as'=>'dang_ky.all',
		'uses'=>'DangKyController@all'
	]);
	Route::get('/delete/dang-ky/{id}',[
		'as'=>'dang_ky.destroy',
		'uses'=>'DangKyController@destroy'
	]);
});
//Đơn vị trực thuộc
Route::get('/don-vi/{don_vi}',[
	'as'=>'donvi',
	'uses'=>'PageController@donvi'
]);
//Đơn vị trực thuộc
Route::get('ban-do-truong',[
	'as'=>'ban_do',
	'uses'=>'PageController@ban_do'
]);
//Liên hệ
Route::get('/lien-he',[
	'as'=>'lien_he',
	'uses'=>'LienHeController@lien_he'
]);
Route::post('/lien-he',[
	'as'=>'lien_he.store',
	'uses'=>'LienHeController@store'
]);
//Hết Route Liên hệ

//Đăng ký
Route::get('/dang-ky',[
	'as'=>'dang_ky',
	'uses'=>'DangKyController@dang_ky'
]);
Route::post('/dang-ky',[
	'as'=>'dang_ky.store',
	'uses'=>'DangKyController@store'
]);
//Hết Route Đăng ký

//Đăng nhập
Route::get('/login',[
	'as'=>'login',
	'uses'=>'PageController@login'
]);
Route::post('/login',[
	'as'=>'postLogin',
	'uses'=>'PageController@postLogin'
]);
Route::get('/logout',[
	'as'=>'logout',
	'uses'=>'PageController@logout'
]);
//Hết Route Đăng nhập

Route::get('/tim-kiem',[
	'as'=>'timkiem',
	'uses'=>'PageController@timKiem'
]);
Route::get('/danh-sach-hssv',[
	'as'=>'hssv.list',
	'uses'=>'HssvController@list'
]);

Route::get('/xoa_hssv/{id}',[
	'as'=>'hssv.destroy',
	'uses'=>'HssvController@destroy'
]);

Route::get('/lich-tuan',[
	'as'=>'lichtuan',
	'uses'=>'LichTuanController@list'
]);

Route::get('/lich-tuan/{lich_slug}.html',[
	'as'=>'lich.show',
	'uses'=>'LichTuanController@show'
]);
Route::get('/gioi-thieu/{gioithieu_slug}.html',[
	'as'=>'gioithieu.show',
	'uses'=>'GioiThieuController@show'
]);
Route::get('/thu-vien-anh',[
	'as'=>'album',
	'uses'=>'AlbumController@list'
]);
Route::get('/album/{album_slug}',[
	'as'=>'album.show',
	'uses'=>'AlbumController@show'
]);
//Văn bản
Route::get('/van-ban',[
	'as'=>'vanban',
	'uses'=>'VanBanController@list'
]);
Route::get('van-ban/tim-kiem',[
	'as'=>'vanban.timkiem',
	'uses'=>'VanBanController@timKiem'
]);
//Biểu mẫu
Route::get('/bieu-mau',[
	'as'=>'bieumau',
	'uses'=>'BieuMauController@list'
]);
Route::get('/{cat_slug}',[
	'as'=>'category.show',
	'uses'=>'CategoryController@show'
]);
Route::get('/print-preview/{post_slug}.html',[
	'as'=>'print.preview',
	'uses'=>'PrintController@printPreview'
]);
Route::get('/{cat_slug}/{post_slug}.html',[
	'as'=>'post.show',
	'uses'=>'PostController@show'
]);



<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route:: get ('top','trangchu@danhsach');
Route:: get ('monan','trangchu@monan');
Route::post('Monan/TimKiem','ControllerMonan@TimKiemSanPham');
Route::get ('monan/{id_theloai}','ControllerMonan@theloai');

Route::get('trangchu','ControllerTOP@toptop')->name('trangchu');

Route::get('chitiet','Chitietmonan@chitiet');



Route::get('chitietdiadiem/{id_diadiem}','ControllerDiaDiem@ChiTietDiaDiem');





Route::get('gioithieu',function () {
    return view('GIOITHIEU');}
);




Route::get('APIdiadiem',function()
{
	
	 return DB::select('SELECT loadPlaces.id_diadiem, ten, diachi, vung, lienhe, open, close, loadPlaces.avt, bando, 							danhgia, theloai, name_sanpham, gia, loadProducts.avt, theloai
	 					FROM sanpham loadProducts JOIN theloai loadCate ON loadProducts.id_theloai = loadCate.id_theloai 
 						JOIN diadiem loadPlaces ON loadPlaces.id_diadiem = loadProducts.id_diadiem');
});


Route::get('APIdiadiemnoibat',function()
{
	
	 return DB::select('SELECT loadPlaces.id_diadiem, loadPlaces.ten, loadPlaces.diachi, loadPlaces.vung, loadPlaces.lienhe, loadPlaces.open, loadPlaces.close, loadPlaces.avt_diadiem, loadPlaces.bando, loadPlaces.danhgia, loadCate.theloai FROM diadiem loadPlaces JOIN theloai loadCate ON loadPlaces.id_theloai = loadCate.id_theloai ORDER BY danhgia DESC LIMIT 8');
});


Route::get('APIdiadiemlancan/{vung}',function($vung)
{
	
	return DB::select('SELECT loadPlaces.id_diadiem, loadPlaces.ten, loadPlaces.diachi, loadPlaces.vung, loadPlaces.lienhe, 					  loadPlaces.open, loadPlaces.close, loadPlaces.avt_diadiem, loadPlaces.bando, 
		                      loadPlaces.danhgia, loadCate.theloai 
	 					FROM diadiem loadPlaces 
	 						JOIN theloai loadCate 
	 							ON loadPlaces.id_theloai = loadCate.id_theloai 
	 					WHERE loadPlaces.vung LIKE N'."'$vung'");
});

Route::get('APIsanpham/{id_diadiem}',function($id_diadiem)
{
	
	 return DB::select('SELECT id_diadiem, name_sanpham, gia, avt_sanpham FROM sanpham
	  WHERE id_diadiem = '."'$id_diadiem'");
});


Route::get('APImonan',function()
{
	
	 return DB::select('SELECT id_diadiem, ten, diachi, vung, lienhe, open, close, avt_diadiem, bando, danhgia, theloai 
	 					FROM diadiem loadPlaces JOIN theloai loadCate ON loadPlaces.id_theloai = loadCate.id_theloai 
	 					WHERE loadPlaces.id_theloai LIKE 1 ');
});


Route::get('APInuocuong',function()
{
	
	 return DB::select('SELECT id_diadiem, ten, diachi, vung, lienhe, open, close, avt_diadiem, bando, danhgia, theloai 
	 					FROM diadiem loadPlaces JOIN theloai loadCate ON loadPlaces.id_theloai = loadCate.id_theloai 
	 					WHERE loadPlaces.id_theloai LIKE 2');
});

Route::get('APIanvat',function()
{
	
	 return DB::select('SELECT id_diadiem, ten, diachi, vung, lienhe, open, close, avt_diadiem, bando, danhgia, theloai 
	 					FROM diadiem loadPlaces JOIN theloai loadCate ON loadPlaces.id_theloai = loadCate.id_theloai 
	 					WHERE loadPlaces.id_theloai LIKE 3');
});

Route::get('APItaikhoan',function()
{
	
	 return DB::select('SELECT * FROM taikhoan');
});
Route::get('APItheloai',function()
{
	
	 return DB::select('SELECT * FROM theloai');
});

Route::get('APIdiadiemtl/{id_theloai}',function($id_theloai)
{
	
	 return DB::select('SELECT * FROM theloai WHERE id_theloai = '."'$id_theloai'");
});





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
Route::get('/kayit', 'HomeController@createView')->name('register.view');

Route::get('/', 'LoginController@loginView');
Route::post('/giris','LoginController@login')->name('login');

Route::get('/admin', 'AdminController@index');

//%98 bu tarz yapacağız
Route::get('/merhaba', 'HomeController@merhaba');
Route::get('/People', 'HomeController@indexView')->name('person');
Route::post('/kaydet', 'HomeController@create');
Route::get('/sil/{id}', 'HomeController@delete')->where(array('id' => '[0-9]+'));
Route::post('/guncelle/{id}', 'HomeController@update')->where(array('id' => '[0-9]+'))->name('user.update');
Route::get('/guncelle/{id}','HomeController@updateView')->where(array('id' => '[0-9]+'));

Route::get('/userimport','ExcelUploadController@userImportView')->name('user.upload');
Route::post('/userimportpost','ExcelUploadController@userImport')->name('user.import');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/indir','ExcelDownloadController@userDownload')->name('user.download');
Route::get('/urun-ekle','ProductController@productCreateView')->name ('product.add');
Route::post('/urun-kaydet', 'ProductController@productCreate')->name ('product.create');
Route::get('/urun-liste','ProductController@indexView');
Route::get('/application', 'HomeController@applicationView')->name('application');
Route::get('/userexport','ExcelDownloadController@userExportView');
Route::post('/userexportpost','ExcelDownloadController@userExport');
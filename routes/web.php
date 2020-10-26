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

Route::get('/', "Tampilan@index");
Route::get('/profil', "Tampilan@profil");
Route::get('/visimisi', "Tampilan@visimisi");
Route::get('/sejarah', "Tampilan@sejarah");
Route::get('/struktur', "Tampilan@struktur");
Route::get('/masa', "Tampilan@masa");
Route::get('/mna', "Tampilan@mna");
Route::get('/spr', "Tampilan@spr");
Route::get('/dma', "Tampilan@dma");
Route::get('/lwn', "Tampilan@lwn");
Route::get('/ptm', "Tampilan@ptm");
Route::get('/eli', "Tampilan@eli");
Route::get('/dmn', "Tampilan@dmn");
Route::get('/yku', "Tampilan@yku");
Route::get('/binpotdirga', "Tampilan@binpotdirga");
Route::get('/piaardhya', "Tampilan@piaardhya");
Route::get('/makoopsau', "Tampilan@makoopsau");
Route::get('/jajaran', "Tampilan@jajaran");
Route::get('/fotos', "Tampilan@foto");
Route::get('/videos', "Tampilan@video");
Route::get('/kliping', "Tampilan@kliping");
Route::get('/monitoring', "Tampilan@monitoring");
Route::get('/artikelse', "Tampilan@artikel");
Route::get('/buletin', "Tampilan@buletin");
Route::get('/kajian', "Tampilan@kajian");
Route::get('/covid', "Tampilan@covid");
Route::get('/publik', "Tampilan@publik");
Route::get('/link', "Tampilan@link");
Route::get('/download', "Tampilan@download");
Route::get('/tanyajawab', "Tampilan@tanyajawab");
Route::get('/alamat', "Tampilan@alamat");
Route::get('/penerangan', "Tampilan@penerangan");


//detail artikel
Route::get('/data/{slug}', "Tampilan@detail");

Route::match(['get', 'post'], '/admin/develop/riotinto/daftar', "User\Register@index");
Route::match(['get', 'post'], '/admin/akses/register', "User\Register@store");
Route::match(['get', 'post'], '/admin/login', "User\Login@index");
Route::match(['get', 'post'], '/admin/akses/login', "User\Login@store");
Route::match(['get', 'post'], '/admin/logout', "User\Login@destroy");
Route::match(['get', 'post'], '/admin/password', "User\Home\Index@show")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/password/update', "User\Home\Index@store")->middleware(['auth']);

Route::match(['get', 'post'], '/admin/develop/home', "User\Home\Index@index")->middleware(['auth']);
//register
Route::match(['get', 'post'], '/admin/develop/register', "User\Account\RegisterAdmin@index")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/develop/register/create', "User\Account\RegisterAdmin@store")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/develop/register/update/{id}', "User\Account\RegisterAdmin@update")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/develop/register/delete/{id}', "User\Account\RegisterAdmin@destroy")->middleware(['auth']);
// artikel
Route::match(['get', 'post'], '/admin/develop/artikelku', "User\Tampil\Artikel@index")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/develop/artikelku/create', "User\Tampil\Artikel@store")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/develop/artikelku/update/{id}', "User\Tampil\Artikel@update")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/develop/artikelku/delete/{id}', "User\Tampil\Artikel@destroy")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/develop/artikelku/kategori/create', "User\Tampil\Artikel@create")->middleware(['auth']);
// foto
Route::match(['get', 'post'], '/admin/develop/fotoku', "User\Tampil\Foto@index")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/develop/fotoku/create', "User\Tampil\Foto@store")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/develop/fotoku/update/{id}', "User\Tampil\Foto@update")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/develop/fotoku/delete/{id}', "User\Tampil\Foto@destroy")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/develop/fotoku/kategori/create', "User\Tampil\Foto@create")->middleware(['auth']);
// video
Route::match(['get', 'post'], '/admin/develop/videoku', "User\Tampil\Video@index")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/develop/videoku/create', "User\Tampil\Video@store")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/develop/videoku/update/{id}', "User\Tampil\Video@update")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/develop/videoku/delete/{id}', "User\Tampil\Video@destroy")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/develop/videoku/kategori/create', "User\Tampil\Video@create")->middleware(['auth']);

// admin
Route::match(['get', 'post'], '/admin/admin/home', "User\Home\IndexAdmin@index")->middleware(['auth']);
// register
Route::match(['get', 'post'], '/admin/admin/register', "User\Account\RegisterUser@index")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/admin/register/create', "User\Account\RegisterUser@store")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/admin/register/update/{id}', "User\Account\RegisterUser@update")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/admin/register/delete/{id}', "User\Account\RegisterUser@destroy")->middleware(['auth']);
// artikel
Route::match(['get', 'post'], '/admin/admin/artikelku', "User\Tampil\ArtikelAdmin@index")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/admin/artikelku/create', "User\Tampil\ArtikelAdmin@store")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/admin/artikelku/update/{id}', "User\Tampil\ArtikelAdmin@update")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/admin/artikelku/delete/{id}', "User\Tampil\ArtikelAdmin@destroy")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/admin/artikelku/kategori/create', "User\Tampil\ArtikelAdmin@create")->middleware(['auth']);
// foto
Route::match(['get', 'post'], '/admin/admin/fotoku', "User\Tampil\FotoAdmin@index")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/admin/fotoku/create', "User\Tampil\FotoAdmin@store")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/admin/fotoku/update/{id}', "User\Tampil\FotoAdmin@update")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/admin/fotoku/delete/{id}', "User\Tampil\FotoAdmin@destroy")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/admin/fotoku/kategori/create', "User\Tampil\FotoAdmin@create")->middleware(['auth']);
// video
Route::match(['get', 'post'], '/admin/admin/videoku', "User\Tampil\VideoAdmin@index")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/admin/videoku/create', "User\Tampil\VideoAdmin@store")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/admin/videoku/update/{id}', "User\Tampil\VideoAdmin@update")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/admin/videoku/delete/{id}', "User\Tampil\VideoAdmin@destroy")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/admin/videoku/kategori/create', "User\Tampil\VideoAdmin@create")->middleware(['auth']);

// user
Route::match(['get', 'post'], '/admin/user/home', "User\Home\IndexUser@index")->middleware(['auth']);
// artikel
Route::match(['get', 'post'], '/admin/user/artikelku', "User\Tampil\ArtikelUser@index")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/user/artikelku/create', "User\Tampil\ArtikelUser@store")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/user/artikelku/update/{id}', "User\Tampil\ArtikelUser@update")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/user/artikelku/delete/{id}', "User\Tampil\ArtikelUser@destroy")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/user/artikelku/kategori/create', "User\Tampil\ArtikelUser@create")->middleware(['auth']);
// foto
Route::match(['get', 'post'], '/admin/user/fotoku', "User\Tampil\FotoUser@index")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/user/fotoku/create', "User\Tampil\FotoUser@store")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/user/fotoku/update/{id}', "User\Tampil\FotoUser@update")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/user/fotoku/delete/{id}', "User\Tampil\FotoUser@destroy")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/user/fotoku/kategori/create', "User\Tampil\FotoUser@create")->middleware(['auth']);
// video
Route::match(['get', 'post'], '/admin/user/videoku', "User\Tampil\VideoUser@index")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/user/videoku/create', "User\Tampil\VideoUser@store")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/user/videoku/update/{id}', "User\Tampil\VideoUser@update")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/user/videoku/delete/{id}', "User\Tampil\VideoUser@destroy")->middleware(['auth']);
Route::match(['get', 'post'], '/admin/user/videoku/kategori/create', "User\Tampil\VideoUser@create")->middleware(['auth']);

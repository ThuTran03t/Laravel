<?php






use App\Http\Controllers\Usercontroller;
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

Route::get('/welcome', function () {
    return('Chào mừng các bạn đã đến với PNV');
});

Route::get('/xinchao', [Usercontroller::class, 'xinchao']);


/*bai tap ve nha cua thay Dinh */

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

Route::get('/tong', [App\Http\Controllers\TinhTongController::class, 'index']);
Route::post('/tong', [App\Http\Controllers\TinhTongController::class, 'Summ']);

//------------------bài làm trên lớp-----------------//

// Route::get('/formt', function () {
//     return view('formt');
// });
// Route::post('/formt', function (Illuminate\Http\Request $request) {
//     $data = $request->validate([
//         'name' => 'required|string|max:255',
//         'age' => 'required|integer|min:1|max:120',
//         'dob' => 'required|date',
//         'phone' => 'required|string|max:255',
//         'website' => 'required|url|max:255',
//         'address' => 'required|string|max:255',
//     ]);

//     return view('form-output', ['data' => $data]);
// })->name('submit-form');

/*bai tap ve nha cua thay Dinh */

// Route::get('/form', function () {
//     return view('form');
// });
Route::get('/form', function () {
    return view('form');
})->name('form');
// Route::post('/submit-form', function () {
//     $name = request('name');
//     $age = request('age');
//     $dob = request('dob');
//     $phone = request('phone');
//     $address = request('address');
//     $website = request('website');
//     return view('form-result', [
//         'name' => $name,
//         'age' => $age,
//         'dob' => $dob,
//         'phone' => $phone,
//         'address' => $address,
//         'website' => $website,
//     ]);
// });
Route::post('/submit-form', function () {
    $data = request()->validate([
        'name' => 'required|string|max:255',
        'age' => 'required|integer|min:1|max:120',
        'dob' => 'required|date',
        'phone' => 'required|string',
        'address' => 'required|string',
        'website' => 'required|url',
    ]);
    return redirect()->route('form')->with('data', $data);
})->name('submit-form');

/* ngày 26/04/2023 học về Blade Template */

Route::get('index', [
    'as'=>'trang-chu',
    'user'=>'PageController@getIndex'
]);


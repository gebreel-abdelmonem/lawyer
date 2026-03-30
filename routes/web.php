<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('محامى تأسيس شركات فى مصر', function () {
    return view('pages.محامى تأسيس شركات فى مصر');
})->name('محامى تأسيس شركات فى مصر');
Route::get('ادارة القضايا والمنازعات', function () {
    return view('pages.ادارة القضايا والمنازعات');
})->name('ادارة القضايا والمنازعات');
Route::get('محامي توثيق زواج الاجانب في مصر', function () {
    return view('pages.محامي توثيق زواج الاجانب في مصر');
})->name('محامي توثيق زواج الاجانب في مصر');
Route::get('محامي قضايا عمالية', function () {
    return view('pages.محامي قضايا عمالية');
})->name('محامي قضايا عمالية');
Route::get('محامي تعويضات في مصر', function () {
    return view('pages.محامي تعويضات في مصر');
})->name('محامي تعويضات في مصر');
Route::get('محامي قضايا أحوال شخصية', function () {
    return view('pages.محامي قضايا أحوال شخصية');
})->name('محامي قضايا أحوال شخصية');
Route::get('محامي كسب الجنسية المصرية', function () {
    return view('pages.محامي كسب الجنسية المصرية');
})->name('محامي كسب الجنسية المصرية');
Route::get('محامي عقارات في مصر', function () {
    return view('pages.محامي عقارات في مصر');
})->name('محامي عقارات في مصر');
Route::get('محامي تسجيل عقارات', function () {
    return view('pages.محامي تسجيل عقارات');
})->name('محامي تسجيل عقارات');
Route::get('التصديق علي الاوراق الرسمية', function () {
    return view('pages.التصديق علي الاوراق الرسمية');
})->name('التصديق علي الاوراق الرسمية');
Route::get('محامي عقود', function () {
    return view('pages.محامي عقود');
})->name('محامي عقود');
Route::get('محامي تحكيم دولى فى مصر', function () {
    return view('pages.محامي تحكيم دولى فى مصر');
})->name('محامي تحكيم دولى فى مصر');
Route::get('محامي تأسيس شركات عقارية فى مصر', function () {
    return view('pages.محامي تأسيس شركات عقارية فى مصر');
})->name('محامي تأسيس شركات عقارية فى مصر');
Route::get('ادارة الاملاك والاصول العقارية', function () {
    return view('pages.ادارة الاملاك والاصول العقارية');
})->name('ادارة الاملاك والاصول العقارية');
Route::get('محامي استشارات قانونية اون لاين وحضوري في مصر', function () {
    return view('pages.محامي استشارات قانونية اون لاين وحضوري في مصر');
})->name('محامي استشارات قانونية اون لاين وحضوري في مصر');
Route::get('محامي قضايا الايجارات', function () {
    return view('pages.محامي قضايا الايجارات');
})->name('محامي قضايا الايجارات');
Route::get('محامي قضايا مدنية وتجارية', function () {
    return view('pages.محامي قضايا مدنية وتجارية');
})->name('محامي قضايا مدنية وتجارية');
Route::get('من نحن', function () {
    return view('pages.من نحن');
})->name('من نحن');
Route::get('تواصل معنا', function () {
    return view('pages.تواصل معنا');
})->name('تواصل معنا');



//
Route::get('/library', [LibraryController::class, 'index'])->name('library');

Route::get('/library/{id}', [LibraryController::class, 'show'])->name('post.show');

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

//

Route::get('admin-dashboard', function () {
    return view('admin.login');
})->name('login');
Route::get('admin-register', function () {
    return view('admin.register');
})->name('register');
Route::post('admin-register', [AuthController::class, 'register'])->name('admin.register');



Route::middleware(['auth'])->group(function () {

    // Route::post('admin-register', [AuthController::class, 'store'])
    //     ->name('admin.register');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

    Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::post('/posts/{id}/update', [PostController::class, 'update'])->name('posts.update');

    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');
});

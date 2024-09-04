<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController; 

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
    return view('welcome');
});

// Menambahkan route untuk nomor 1
Route::get('/hello', function () { 
    return 'Hello World'; 
});

// Menambahkan route untuk nomor 2
Route::get('/world', function () { 
    return 'World'; 
});

// Menambahkan route '/' yang menampilkan selamat datang
Route::get('/', function () {
    return ('Selamat Datang');
});

// Menambahkan route '/' yang menampilkan selamat datang
Route::get('/about', function () {
    return 'NIM: 2241760015 <br> Nama: Oddis Nur Alifathur Razaaq';
});

// Membuat routing dengan parameter
Route::get('/user/{name}', function ($name) { 
    return 'Nama saya '.$name; 
}); 

// Percobaan route bisa menerima lebih dari 1 parameter
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
}); 

// Menambahkan route untuk menampilkan artikel berdasarkan ID 
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});

// Memanggil route /user sekaligus mengirimkan parameter berupa nama user $name dimana parameternya bersifat opsional.
Route::get('/user/{name?}', function ($name=null) { 
    return 'Nama saya '.$name; 
}); 

// Mengubah kode pada route /user
Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name; 
}); 

// // Route Name
// Route::get('/user/profile', function () { 
//     // 
//     })->name('profile'); 
//     Route::get( 
//     '/user/profile', 
//     [UserProfileController::class, 'show'] 
//     )->name('profile'); 
//     // Generating URLs... 
//     $url = route('profile'); 
//     // Generating Redirects... 
//     return redirect()->route('profile'); 

// // Route Group dan Route Prefixes 
// Route::middleware(['first', 'second'])->group(function () { 
//     Route::get('/', function () { 
//         // Uses first & second middleware... 
//     }); 
 
// Route::get('/user/profile', function () { 
//         // Uses first & second middleware... 
//     }); 
// }); 
 
// Route::domain('{account}.example.com')->group(function () { 
//     Route::get('user/{id}', function ($account, $id) { 
//         // 
//     }); 
// }); 
 
// Route::middleware('auth')->group(function () { 
//  Route::get('/user', [UserController::class, 'index']); 
//  Route::get('/post', [PostController::class, 'index']); 
//  Route::get('/event', [EventController::class, 'index']); 
  
// }); 

// // Route Prefixes
// Route::prefix('admin')->group(function () { 
//     Route::get('/user', [UserController::class, 'index']); 
//     Route::get('/post', [PostController::class, 'index']); 
//     Route::get('/event', [EventController::class, 'index']); 
    
// });

// // Redirect Routes
// Route::redirect('/here', '/there');

// // View Routes
// Route::view('/welcome', 'welcome'); 
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

// Mengubah route /hello
Route::get('/hello', [WelcomeController::class,'hello']);

// Route untuk yang menggunakan controller
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route untuk modifikasi dengan konsep Single Action Controller
Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticleController::class);

// Route agar terhubung dengan frontend
Route::resource('photos', PhotoController::class);

// Route only
Route::resource('photos', PhotoController::class)->only([ 
    'index', 'show' 
]); 

// Route except
Route::resource('photos', PhotoController::class)->except([ 
    'create', 'store', 'update', 'destroy' 
]); 
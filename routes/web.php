<?php

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

// Route Name
Route::get('/user/profile', function () { 
    // 
    })->name('profile'); 
    Route::get( 
    '/user/profile', 
    [UserProfileController::class, 'show'] 
    )->name('profile'); 
    // Generating URLs... 
    $url = route('profile'); 
    // Generating Redirects... 
    return redirect()->route('profile'); 

// Route Group dan Route Prefixes 
Route::middleware(['first', 'second'])->group(function () { 
    Route::get('/', function () { 
        // Uses first & second middleware... 
    }); 
 
Route::get('/user/profile', function () { 
        // Uses first & second middleware... 
    }); 
}); 
 
Route::domain('{account}.example.com')->group(function () { 
    Route::get('user/{id}', function ($account, $id) { 
        // 
    }); 
}); 
 
Route::middleware('auth')->group(function () { 
 Route::get('/user', [UserController::class, 'index']); 
 Route::get('/post', [PostController::class, 'index']); 
 Route::get('/event', [EventController::class, 'index']); 
  
}); 

// Route Prefixes
Route::prefix('admin')->group(function () { 
    Route::get('/user', [UserController::class, 'index']); 
    Route::get('/post', [PostController::class, 'index']); 
    Route::get('/event', [EventController::class, 'index']); 
    
});

// Redirect Routes
Route::redirect('/here', '/there');

// View Routes
Route::view('/welcome', 'welcome'); 
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
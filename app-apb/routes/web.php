<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\empresaController;



Route::resource('products', ProductController::class);

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/info', function () {
    return view('informacion');
});




Route::get('/conocenos', function () {
    return view('conocenos');
});
Route::get('/registrar', function () {
    return view('auth.register');
});
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/bigdata', function () {
    return view('bigData');
});

Route::get('/update', [empresaController::class,'indexUpdate']);  
   


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    });
    Route::get('/altaEmpresa', function () {
        return view('altaEmpresa');
    });
    Route::get('administradores/eliminarEmpresas', [empresaController::class,'index']);  
    Route::get('/update', [empresaController::class,'indexUpdate']);  
    Route::post('/bajaEmpresa', [empresaController::class,'operaciones']); 
    Route::post('/insertaEmpresa', [empresaController::class,'operaciones']); 
    Route::post('/updatearEmpresa', [empresaController::class,'operaciones']);
  });
    Route::post('/contactos', [ContactosController::class,'store']); 
    Route::post('/logout', function (Request $request) {
      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect('/');
  });
  





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

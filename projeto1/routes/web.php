<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return redirect()->route('admin.clientes');
});

// Route::get('/empresa', function (){
//     return view('empresapasta.empresa');
// });
    
// Route::any('/any', function(){
//     return "Permite todo tipo de acesso http (put, delete, get, post";
// });

// Route::match(['put', 'delete'],'/match', function(){
//     return "Permite apenas acessos definidos";
// });

// Route::get('/produto/{id}/{cat?}', function($id, $cat = ''){
//     return "O id do produto é: ".$id."<br>"."A categoria é: ".$cat;
// });

// Route::get('/sobre', function(){
//     return redirect('/empresa');
// });

// Route::redirect('/sobre', '/empresa');

// Route::get('/news', function(){
//     return view('news');
// })->name('noticias');

// Route::get('/novidades', function(){
//     return redirect()->route('noticias');
// });

// Route::prefix('admin')->group(function(){
    // Route::name('admin.')->group(function(){

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function(){

        Route::get('dashboard', function(){
            return "dashboard";
        })->name('dashboard');
        
        Route::get('users', function(){
            return "users";
        })->name('users');
        
        Route::get('clientes', function(){
            return "clientes";
        })->name('clientes');
});

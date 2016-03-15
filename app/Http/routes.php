<?php

Route::get('/', function () {
    return view('website.index');
});


Route::get('/tienda', function () {
    
    return view('website.tienda');
});

Route::get('/carrito', function () {
    
    return view('website.carrito');
});

Route::get('/acerca', function () {
    
    return view('website.acerca');
});

Route::get('/contacto', function () {
    
    return view('website.contacto');
});

Route::get('/ingresar', function () {
    
    return view('website.ingresar');
});
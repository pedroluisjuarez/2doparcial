<?php

//use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; //con esta clase capturaremos todo lo que se envie en crear.blade.php
use App\Models\Tienda_Producto; //importamos la clase, dad la ubiacion


//(13) PROTEGIENDO CON MIDDLEWARE PARA AUTENTICAR
    //> composer require laravel/ui
    //> php artisan ui:auth
    //> php artisan ui vue --auth
    //> run [npm install && npm run dev]

Route::middleware('auth')->group(function(){

    
    //(4) RUTA PARA MOSTAR EN LA APLICACION desde VIEW/productsvista/index
    Route::get('urlestudiante2', function () { //nombre de llamada en la url
        //$variable3 = Tienda_Producto::all(); //(9) creamos una variable para mostrar todods los datos del modelo
        $variable3 = Tienda_Producto::orderby('created_at','desc')->get(); //(9.1) creamos una variable para mostrar los datos del modelo, pediremos que ordene por fecha de creacion en forma descendente + get para mostrar todo el listado
    return view('productsvista.index',compact('variable3')); //ubicacion de archivo vista (formulario) + la variable para enlistar lo guardado (listado de productos)
    })->name('productsvista.aliasindex'); //alias de la ruta




}); // 'auth' obligara a que se autentique para ingresar a las rutas

Auth::routes(); //ruta para abrir y cerrar sesion


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

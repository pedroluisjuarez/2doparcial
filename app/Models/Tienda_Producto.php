<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/*
(2) un modelo se encarga de comunicarse con una tabla de la base de datos
y ejecutar algunas tareas, guardar, consultar, modificar, eliminar.
se crea un modelo por cada tabla...

//nota se recomienta que el modelo debe llevar el nombre de la tabla
solo que SINGULAR Y la primera letra MAYUSCULA. "Tienda_Producto = (bd tienda_productos)""

>php artisan make:model Tienda_Producto (bd tienda_productos)
*/


class Tienda_Producto extends Model
{
    use HasFactory;
    protected $table = 'tienda_products'; /*BUSCA LA TABLA*/
    protected $fillable = ['description', 'price'];
}

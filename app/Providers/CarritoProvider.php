<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Carrito;

class CarritoProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //view composer muestra en todas las paginas el carrito
        view()->composer('*', function($view){

            $carrito_id = \Session::get('carrito_id');//busca el id del carrito

            //si no tiene id le crea una  nueva findOrCreateBySessionID y si tiene lo busca de todas formas
            $carrito = Carrito::findOrCreateBySessionID($carrito_id);

            \Session::put('carrito_id', $carrito->id);

            $view->with('carrito', $carrito);//enviamos la variable con el valor del carrito de compras
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
/*
NOTA: Agregar 'App\Providers\CarritoProvider::class,' a config/app.php en la seccion de providers para indicarle a laravel que use CarritoProvider
*/

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carrito;

class CarritoController extends Controller
{
    //
    public function index(){
    	$carrito_id = \Session::get('carrito_id');//busca el id del carrito

        //si no tiene id le crea una  nueva findOrCreateBySessionID y si tiene lo busca de todas formas
        $carrito = Carrito::findOrCreateBySessionID($carrito_id);

        $products = $carrito->products()->get();

        $total = $carrito->total();

        return view('carrito.index', ['products' => $products, 'total' => $total]);    
    }
}

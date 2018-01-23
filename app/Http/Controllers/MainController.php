<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
//controlador de la pagina de inicio
class MainController extends Controller
{
    //
    public function home(){
    	$products = Product::all();
        return view('main.home',['products' => $products]);
 
    }
}
	
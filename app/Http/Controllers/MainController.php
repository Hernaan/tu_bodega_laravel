<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//controlador de la pagina de inicio
class MainController extends Controller
{
    //
    public function home(){
    	return view('main.home',[]);
    }
}
	
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InCarritoProducts;
use App\Carrito;

class InCarritoProductsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //funcion para guardar el carrito
        $carrito_id = \Session::get('carrito_id');//busca el id del carrito

            //si no tiene id le crea una  nueva findOrCreateBySessionID y si tiene lo busca de todas formas
        $carrito = Carrito::findOrCreateBySessionID($carrito_id);

        $response = InCarritoProducts::create([
                'carrito_id' => $carrito->id,
                'product_id' => $request->product_id
            ]);

        if(false){
            return redirect('/carrito');
        }else{
            return back();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

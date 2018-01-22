<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('products.index',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Formulario para agregar productos
        $product = new Product;
        return view('products.create',['product'=>$product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //metodo para agregar productos
        $product = new Product;
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->precio = $request->precio;
        $product->user_id = Auth::user()->id;

        if($product->save()){
            return redirect('/products');
            
        }else{
            return view("products.create", ["product" => $product]);
            //["product" => $product] sirve para no borrar datos completados cuando se completo mal el formulario
            
        }
       



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //metodo para mostrar producto unico
        $product = Product::find($id);
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Formulario para editar los productos
        $product = Product::find($id);
        return view('products.edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Metodo para editar los productos
        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->precio = $request->precio;
        

        if($product->save()){
            return redirect('/products');
            
        }else{
            return view("products.edit", ["product" => $product]);
            
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
        //metodo para eliminar el producto
        Product::destroy($id);
        return redirect('/products');

    }
}

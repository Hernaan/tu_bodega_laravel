<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
	protected $fillable = ['status'];//se agrega para que funcione createWithoutSession
    public function total(){
        return $this->products()->sum("precio");//metodo que suma el total de la compra
    }

    //relacion con InCarritoProducts
    public function inCarritoProducts(){
        //devuelve los productos de la InProductsCarrito    
        return $this->hasMany('App\InCarritoProducts');
    }

    //Devuelve todos los productos dentro del carrito 
    public function products(){
        //hacemos uso de la tabla pivot
        return $this->belongsToMany('App\Product', 'in_carrito_products');
    }


	public function products_cantidad(){
    	return $this->products()->count();
    }

    //FUNCION QUE BUSCA Y CREA EL CARRITO
    public static function findOrCreateBySessionID($carrito_id){
    	if($carrito_id){
    		//Busca carrito con el id
    		return Carrito::findBySession($carrito_id);
    	}else{
    		//crear carrito
    		return Carrito::createWithoutSession();
    	}


    }
    //funcion para buscar el carrito
    public static function findBySession($carrito_id){
    	return Carrito::find($carrito_id);
    }

    //funcion para crear carrito
    public static function createWithoutSession(){

    	return Carrito::create([
    		'status' => 'incompleted'
    			]);

    }

}

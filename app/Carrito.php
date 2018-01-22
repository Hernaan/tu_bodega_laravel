<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
	protected $fillable = ['status'];//se agrega para que funcione createWithoutSession 

	public function products_cantidad(){
    	return $this->id;
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

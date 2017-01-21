<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller {

    public function create(){
        return view('productos.create');
    }

    public function store(Request $request){

        $producto = new Producto($request->all());

        $producto->save();

        return $producto->nombre;

    }
}

?>

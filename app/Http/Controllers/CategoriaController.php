<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller {

    public function create(){
        return view('categorias.create');
    }

    public function store(Request $request){

        $bodega = new Categoria($request->all());

        $bodega->save();

        return $bodega->nombre;

    }
}

?>

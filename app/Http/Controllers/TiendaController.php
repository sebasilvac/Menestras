<?php

namespace App\Http\Controllers;

use App\Tienda;
use Illuminate\Http\Request;

class TiendaController extends Controller {

    public function create(){
        return view('tiendas.create');
    }

    public function store(Request $request){

        $tienda = new Tienda($request->all());

        auth()->user()->tiendas()->save($tienda);

        return $tienda->nombre;

    }

}

?>

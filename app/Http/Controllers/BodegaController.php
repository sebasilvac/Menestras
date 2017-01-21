<?php

namespace App\Http\Controllers;

use App\Bodega;
use Illuminate\Http\Request;

class BodegaController extends Controller {

    public function create(){
        return view('bodegas.create');
    }

    public function store(Request $request){

        $bodega = new Bodega($request->all());
        $bodega->save();
        //auth()->user()->tiendas()->bodegas()->save($bodega);

        return $bodega->nombre;

    }

}

?>

<?php

namespace App\Repositories\Arbitro;

use App\Models\Arbitro;

class ArbitroRepository{
    public function getById($id){
        return Arbitro::find($id);
    }

    public function index(){
        return Arbitro::all();
    }

    public function store($arbitro){
        return Arbitro::create($arbitro);
    }

    public function update($arbitro, $datos){
        return $arbitro->update($datos);
    }

    public function destroy($id){
        return Arbitro::destroy($id);
    }

    public function totalRegistros(){
        return Arbitro::all()->count();
    }
}

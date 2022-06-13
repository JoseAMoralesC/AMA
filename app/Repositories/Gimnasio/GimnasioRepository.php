<?php

namespace App\Repositories\Gimnasio;

use App\Models\Gimnasio;

class GimnasioRepository{
    public function getById($id){
        return Gimnasio::find($id);
    }

    public function index(){
        return Gimnasio::all();
    }

    public function store($gimnasio){
        return Gimnasio::create($gimnasio);
    }

    public function update($gimnasio, $datos){
        return $gimnasio->update($datos);
    }

    public function destroy($id){
        return Gimnasio::destroy($id);
    }

    public function gimnasiosSelect(){
        return Gimnasio::all()->pluck('nombre','id');
    }

    public function totalRegistros(){
        return Gimnasio::all()->count();
    }
}

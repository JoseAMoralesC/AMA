<?php

namespace App\Repositories\Campeonato;

use App\Models\Campeonato;

class CampeonatoRepository{
    public function getById($id){
        return Campeonato::find($id);
    }

    public function index(){
        return Campeonato::all();
    }

    public function store($campeonato){
        return Campeonato::insert($campeonato);
    }

    public function update($campeonato, $datos){
        return $campeonato->update($datos);
    }

    public function destroy($id){
        return Campeonato::destroy($id);
    }

    public function totalRegistros(){
        return Campeonato::all()->count();
    }
}

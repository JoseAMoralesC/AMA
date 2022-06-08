<?php

namespace App\Repositories\Marca;

use App\Models\Marca;

class MarcaRepository{
    public function getById($id){
        return Disciplina::find($id);
    }

    public function index(){
        return Disciplina::all();
    }

    public function store($disciplina){
        return Disciplina::insert($disciplina);
    }

    public function update($disciplina, $datos){
        return $disciplina->update($datos);
    }

    public function destroy($id){
        return Disciplina::destroy($id);
    }

    public function disciplinasParaLosSelect(){
        return Disciplina::all()->pluck('nombre','id');
    }
}

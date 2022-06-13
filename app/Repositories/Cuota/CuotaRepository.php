<?php

namespace App\Repositories\Cuota;

use App\Models\Cuota;

class CuotaRepository{
    public function getById($id){
        return Cuota::find($id);
    }

    public function index(){
        return Cuota::all();
    }

    public function store($cuota){
        return Cuota::insert($cuota);
    }

    public function update($cuota, $datos){
        return $cuota->update($datos);
    }

    public function destroy($id){
        return Cuota::destroy($id);
    }

    public function totalRegistros(){
        return Cuota::all()->count();
    }
}

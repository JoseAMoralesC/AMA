<?php

namespace App\Repositories\Usuario;

use App\Models\User;

class UsuarioRepository{
    public function getById($id){
        return User::find($id);
    }

    public function index(){
        return User::all();
    }

    public function store($usuario){
        return User::insert($usuario);
    }

    public function update($usuario, $datos){
        return $usuario->update($datos);
    }

    public function destroy($id){
        return User::destroy($id);
    }
}

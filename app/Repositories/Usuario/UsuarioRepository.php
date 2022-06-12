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
        return User::create($usuario);
    }

    public function update($usuario, $datos){
        return $usuario->update($datos);
    }

    public function destroy($id){
        return User::destroy($id);
    }

    public function usuarioEnGimnasios($idGimnasio){
        return User::join('usuarios_gimnasios','usuarios_gimnasios.usuario_id','users.id')->
            where('usuarios_gimnasios.gimnasio_id',$idGimnasio)->
            get();
    }
}

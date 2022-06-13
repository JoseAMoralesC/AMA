<?php

namespace App\Repositories\Usuario;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsuarioRepository{
    public function getById($id){
        return User::find($id);
    }

    public function index(){
        return User::query()->where('id','<>',Auth::user()->id)->get();
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

    public function totalRegistros(){
        return User::all()->where('tipo', User::USUARIO_NORMAL)->where('activo',true)->count();
    }

    public function registroPorMeses(){
        return User::query()->select(DB::raw('COUNT(id) as total, Month(created_at) as mes'))->whereYear('created_at',date('Y'))->groupBy(DB::raw('Month(created_at)'))->get();
    }
}

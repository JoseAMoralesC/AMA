<?php

namespace App\Services\Usuario;

use App\Repositories\Usuario\UsuarioRepository;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioService{

    private $usuarioRepository;

    public function __construct(UsuarioRepository $usuarioRepository){
        $this->usuarioRepository = $usuarioRepository;
    }

    public function mountDataIndex(){
        $datosDatatables = [];
        $tipoUsuario = User::tiposEnArray();


        foreach($this->usuarioRepository->index() as $usuario){
            $datosDatatables[] = [
                'id' => $usuario->id,
                'nombre' => $usuario->apellido2 != null ? $usuario->nombre.' '.$usuario->apellido1.' '.$usuario->apellido2 : $usuario->nombre.' '.$usuario->apellido1,
                'fec_nac' => Carbon::parse($usuario->fec_nac)->age.' años ('.Carbon::parse($usuario->fec_nac)->format('d M Y').')',
                'sexo' => __($usuario->sexo),
                'email' => $usuario->email,
                'usuario' => $usuario->usuario,
                'tipo' => $tipoUsuario[$usuario->tipo]
            ];
        }

        return $datosDatatables;
    }

    public function getById($id){
        return $this->usuarioRepository->getById($id);
    }

    public function store($datos){
        $datos['created_at'] = Carbon::now();

        $datos['password'] =  Hash::make($datos['password']);

        return $this->usuarioRepository->store($datos);
    }

    public function update($id, $datos){
        $usuario = $this->usuarioRepository->getById($id);

        $datos['password'] = $datos['password'] != null ? Hash::make($datos['password']) : $usuario->password;

        $datos['updated_at'] = Carbon::now();

        return $this->usuarioRepository->update($usuario, $datos);
    }

    public function destroy($id){
        return $this->usuarioRepository->destroy($id);
    }

    public function tipoUsuario(){
        return User::tiposEnArray();
    }

    public function sexoUsuario(){
        return User::sexoEnArray();
    }
}

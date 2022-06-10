<?php

namespace App\Http\Controllers\Admin\Usuario;

use Illuminate\Routing\Controller;
use App\Services\Usuario\UsuarioService;

class CreateController extends Controller
{
    private $usuarioService;

    public function __construct(UsuarioService $usuarioService){
        $this->usuarioService = $usuarioService;
    }

    public function create(){
        return view('admin.usuarios.create',[
            'tiposUsuario' => $this->usuarioService->tipoUsuario(),
            'sexoUsuario' => $this->usuarioService->sexoUsuario()
        ]);
    }
}

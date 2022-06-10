<?php

namespace App\Http\Controllers\Admin\Usuario;

use Illuminate\Routing\Controller;
use App\Services\Usuario\UsuarioService;

class EditController extends Controller
{
    private $usuarioService;

    public function __construct(UsuarioService $usuarioService){
        $this->usuarioService = $usuarioService;
    }

    public function edit($id){
        return view('admin.usuarios.edit',[
            'usuario' => $this->usuarioService->getById($id),
            'sexoUsuario' => $this->usuarioService->sexoUsuario(),
            'tiposUsuario' => $this->usuarioService->tipoUsuario()
        ]);
    }
}

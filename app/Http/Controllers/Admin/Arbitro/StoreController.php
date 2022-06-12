<?php

namespace App\Http\Controllers\Admin\Arbitro;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\Arbitro\ArbitroService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class StoreController extends Controller
{
    private $arbitroService;

    public function __construct(ArbitroService $arbitroService){
        $this->arbitroService = $arbitroService;
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'apellido1' => 'required',
            'fec_nac' => 'required',
            'email' => 'required|unique:users,email',
            'disciplina' => 'required'
        ],
        [
            'nombre.required' => __('El nombre del usuario es obligatorio'),
            'apellido1.required' => __('El primer apellido del usuario es obligatorio'),
            'fec_nac.required' => __('La fecha de nacimiento del usuario es obligatoria'),
            'email.required' => __('El campo email es obligatorio'),
            'email.unique' => __('Este email ya ha sido registrado'),
            'email.email' => __('No es una cuenta de email valida'),
            'disciplina.required' => __('Es necesario elegir al menos una disciplina')
        ]);

        $dataRequest = $request->except('_token');

        try{
            DB::connection()->beginTransaction();
            $this->arbitroService->store($dataRequest);
            DB::connection()->commit();
        }catch(\Exception $e){
            DB::connection()->rollBack();
            Log::error($e);


            return redirect()->route('admin.arbitros.index')->with('error','El arbitro '.$request->nombre.' '.$request->apellido1.' no se ha podido añadir');
        }

        return redirect()->route('admin.arbitros.index')->with('success','El arbitro '.$request->nombre.' '.$request->apellido1.' se ha añadido con exito');
    }
}

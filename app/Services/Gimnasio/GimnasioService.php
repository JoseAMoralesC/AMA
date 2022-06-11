<?php

namespace App\Services\Gimnasio;

use App\Repositories\Gimnasio\GimnasioRepository;
use Carbon\Carbon;

use Illuminate\Support\Facades\Hash;

class GimnasioService{

    private $gimnasioRepository;

    public function __construct(GimnasioRepository $gimnasioRepository){
        $this->gimnasioRepository = $gimnasioRepository;
    }

    public function mountDataIndex(){
        $datosDatatables = [];


        foreach($this->gimnasioRepository->index() as $gimnasio){
            $datosDatatables[] = [
                'id' => $gimnasio->id,
                'nombre' => $gimnasio->nombre,
                'direccion' => $gimnasio->direccion,
                'email' => $gimnasio->email,
                'telefono' => $gimnasio->telefono
            ];
        }

        return $datosDatatables;
    }

    public function getById($id){
        return $this->gimnasioRepository->getById($id);
    }

    public function store($datos){
        $datos['created_at'] = Carbon::now();

        return $this->gimnasioRepository->store($datos);
    }

    public function update($id, $datos){
        $gimnasio = $this->gimnasioRepository->getById($id);

        $datos['updated_at'] = Carbon::now();

        $this->gimnasioRepository->update($gimnasio, $datos);
    }

    public function destroy($id){
        return $this->gimnasioRepository->destroy($id);
    }

    public function gimnasiosSelect(){
        return $this->gimnasioRepository->gimnasiosSelect();
    }
}

<?php

namespace App\Services\Campeonato;

use App\Repositories\Campeonato\CampeonatoRepository;
use Carbon\Carbon;


class CampeonatoService{

    private $campeonatoRepository;

    public function __construct(CampeonatoRepository $campeonatoRepository){
        $this->campeonatoRepository = $campeonatoRepository;
    }

    public function mountDataIndex(){
        $datosDatatables = [];


        foreach($this->campeonatoRepository->index() as $campeonato){
            $datosDatatables[] = [
                'id' => $campeonato->id,
                'nombre' => $campeonato->nombre,
                'direccion' => $campeonato->direccin,
                'fecha' => $campeonato->fecha_fin != null ? 'Desde '.Carbon::parse($campeonato->fecha_ini)->format('d M Y').' hasta '.Carbon::parse($campeonato->fecha_fin)->format('d M Y') : 'El '.Carbon::parse($campeonato->fecha_ini)->format('d M Y'),
                'hora' => 'De '.Carbon::parse($campeonato->hora_ini)->format('H:i').' hasta '.Carbon::parse($campeonato->hora_fin)->format('H:i'),
                'descripcion' => $campeonato->descripcion,
            ];
        }

        return $datosDatatables;
    }

    public function getById($id){
        return $this->campeonatoRepository->getById($id);
    }

    public function store($datos){
        $datos['created_at'] = Carbon::now();

        return $this->campeonatoRepository->store($datos);
    }

    public function update($id, $datos){
        $gimnasio = $this->campeonatoRepository->getById($id);

        $datos['updated_at'] = Carbon::now();

        return $this->campeonatoRepository->update($gimnasio, $datos);
    }

    public function destroy($id){
        return $this->campeonatoRepository->destroy($id);
    }

    public function gimnasiosSelect(){
        return $this->campeonatoRepository->gimnasiosSelect();
    }
}

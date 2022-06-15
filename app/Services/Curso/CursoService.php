<?php

namespace App\Services\Curso;

use App\Repositories\Curso\CursoRepository;
use App\Services\Gimnasio\GimnasioService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class CursoService{

    private $cursoRepository;
    private $gimnasioService;

    public function __construct(
        CursoRepository $cursoRepository,
        GimnasioService $gimnasioService
    ){
        $this->cursoRepository = $cursoRepository;
        $this->gimnasioService = $gimnasioService;
    }

    public function mountDataIndex(){
        $datosDatatables = [];


        foreach($this->cursoRepository->index() as $curso){
            $datosDatatables[] = [
                'id' => $curso->id,
                'nombre' => $curso->nombre,
                'fecha' => $curso->fecha_fin != null ? 'Desde '.Carbon::parse($curso->fecha_ini)->format('d M Y').' hasta '.Carbon::parse($curso->fecha_fin)->format('d M Y') : 'El '.Carbon::parse($curso->fecha_ini)->format('d M Y'),
                'hora' => 'De '.Carbon::parse($curso->hora_ini)->format('H:i').' hasta '.Carbon::parse($curso->hora_fin)->format('H:i'),
                'precio' => $curso->precio,
                'gimnasio' => $curso->gimnasio
            ];
        }

        return $datosDatatables;
    }

    public function getById($id){
        return $this->cursoRepository->getById($id);
    }

    public function store($datos){
        $datos['created_at'] = Carbon::now();

        $datos['precio'] =  round($datos['precio'],2);
        $datos['fecha_fin'] = $datos['fecha_fin'] != null ? $datos['fecha_fin'] : $datos['fecha_ini'];

        return $this->cursoRepository->store($datos);
    }

    public function update($id, $datos){
        $curso = $this->cursoRepository->getById($id);

        $datos['updated_at'] = Carbon::now();
        $datos['precio'] =  round($datos['precio'],2);
        $datos['fecha_fin'] = $datos['fecha_fin'] != null ? $datos['fecha_fin'] : $datos['fecha_ini'];

        return $this->cursoRepository->update($curso, $datos);
    }

    public function destroy($id){
        return $this->cursoRepository->destroy($id);
    }

    public function gimnasiosSelect(){
        return $this->gimnasioService->gimnasiosSelect();
    }
}

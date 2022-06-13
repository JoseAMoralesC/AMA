<?php

namespace App\Repositories\Curso;

use App\Models\Curso;

class CursoRepository{
    public function getById($id){
        return Curso::find($id);
    }

    public function index(){
        return Curso::join('gimnasios','gimnasios.id','cursos.gimnasio_id')->
            select(
                'cursos.id as id',
                'cursos.nombre as nombre',
                'cursos.fecha_ini as fecha_ini',
                'cursos.fecha_fin as fecha_fin',
                'cursos.hora_ini as hora_ini',
                'cursos.hora_fin as hora_fin',
                'cursos.precio as precio',
                'gimnasios.nombre as gimnasio',
            )->get();
    }

    public function store($curso){
        return Curso::insert($curso);
    }

    public function update($curso, $datos){
        return $curso->update($datos);
    }

    public function destroy($id){
        return Curso::destroy($id);
    }
}

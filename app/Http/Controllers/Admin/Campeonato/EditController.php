<?php

namespace App\Http\Controllers\Admin\Campeonato;

use Illuminate\Routing\Controller;
use App\Services\Campeonato\CampeonatoService;
use App\Services\Reglamento\ReglamentoService;

class EditController extends Controller
{
    private $campeonatoService;
    private $reglamentoService;

    public function __construct(
        CampeonatoService $campeonatoService,
        ReglamentoService $reglamentoService
    ){
        $this->campeonatoService = $campeonatoService;
        $this->reglamentoService = $reglamentoService;
    }

    public function edit($id){
        return view('admin.campeonatos.edit',[
            'campeonato' => $this->campeonatoService->getById($id),
            'reglamentos' => $this->reglamentoService->reglamentosSelect()
        ]);
    }
}

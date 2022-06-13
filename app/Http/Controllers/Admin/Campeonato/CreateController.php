<?php

namespace App\Http\Controllers\Admin\Campeonato;

use Illuminate\Routing\Controller;
use App\Services\Campeonato\CampeonatoService;
use App\Services\Reglamento\ReglamentoService;

class CreateController extends Controller
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

    public function create(){
        return view('admin.campeonatos.create',[
            'reglamentos' => $this->reglamentoService->reglamentosSelect()
        ]);
    }
}

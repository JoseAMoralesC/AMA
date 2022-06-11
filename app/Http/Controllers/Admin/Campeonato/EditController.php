<?php

namespace App\Http\Controllers\Admin\Campeonato;

use Illuminate\Routing\Controller;
use App\Services\Campeonato\CampeonatoService;

class EditController extends Controller
{
    private $campeonatoService;

    public function __construct(CampeonatoService $campeonatoService){
        $this->campeonatoService = $campeonatoService;
    }

    public function edit($id){
        return view('admin.campeonatos.edit',[
            'campeonato' => $this->campeonatoService->getById($id)
        ]);
    }
}

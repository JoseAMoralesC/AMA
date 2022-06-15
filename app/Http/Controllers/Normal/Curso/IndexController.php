<?php

namespace App\Http\Controllers\Normal\AAMM;

use Illuminate\Routing\Controller;
use App\Services\AAMM\AAMMService;

class IndexController extends Controller
{
    private $campeonatoService;

    public function __construct(CampeonatoService $campeonatoService){
        $this->campeonatoService = $campeonatoService;
    }

    public function index(){
        return view('normal.gimnasio.index');
    }

    public function indexAjax(){
        $data = $this->campeonatoService->mountDataIndex();
        return datatables()->of($data)->make(true);
    }
}

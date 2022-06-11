<?php

namespace App\Http\Controllers\Admin\Gimnasio;

use Illuminate\Routing\Controller;
use App\Services\Gimnasio\GimnasioService;

class IndexController extends Controller
{
    private $gimnasioService;

    public function __construct(GimnasioService $gimnasioService){
        $this->gimnasioService = $gimnasioService;
    }

    public function index(){
        return view('admin.gimnasios.index');
    }

    public function indexAjax(){
        $data = $this->gimnasioService->mountDataIndex();
        return datatables()->of($data)->make(true);
    }
}

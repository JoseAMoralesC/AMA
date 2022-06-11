<?php

namespace App\Http\Controllers\Admin\Gimnasio;

use Illuminate\Routing\Controller;
use App\Services\Gimnasio\GimnasioService;

class CreateController extends Controller
{
    private $gimnasioService;

    public function __construct(GimnasioService $gimnasioService){
        $this->gimnasioService = $gimnasioService;
    }

    public function create(){
        return view('admin.gimnasios.create');
    }
}

<?php

namespace App\Http\Controllers\Admin\Gimnasio;

use Illuminate\Routing\Controller;
use App\Services\Gimnasio\GimnasioService;

class EditController extends Controller
{
    private $gimnasioService;

    public function __construct(GimnasioService $gimnasioService){
        $this->gimnasioService = $gimnasioService;
    }

    public function edit($id){
        return view('admin.gimnasios.edit',[
            'gimnasio' => $this->gimnasioService->getById($id)
        ]);
    }
}

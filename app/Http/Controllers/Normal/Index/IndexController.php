<?php

namespace App\Http\Controllers\Normal\Index;

use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index(){
        return view('normal.index.index');
    }
}

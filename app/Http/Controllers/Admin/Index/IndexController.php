<?php

namespace App\Http\Controllers\Admin\Index;

use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index(){
        return view('admin.index.index');
    }
}

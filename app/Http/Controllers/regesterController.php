<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class regesterController extends Controller
{
    public function start(){
        return view('home.regstration');
    }

    public function vertify(){
        return view('home.vertifay');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddReceitasController extends Controller
{
    public function viewPage(){
        return view('add_receitas');
    }
}

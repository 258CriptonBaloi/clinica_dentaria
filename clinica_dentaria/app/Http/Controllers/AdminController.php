<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //funcao que retorna a view dos medicos
    public function addview(){
        return view('admin.add_doctor');
    }
}

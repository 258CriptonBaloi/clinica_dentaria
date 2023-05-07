<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    //funcao que dereciona o usuario ao seu dashboard
    public function redirect(){
        if(Auth::id()){
            //usuario normal->paciente
                if(Auth::user()->usertype=='0'){
                    return view('user.home');
                }
                //admin
                else {
                    return view('admin.home');
                }
        } else{
            return redirect()->back();
        }
    }
}

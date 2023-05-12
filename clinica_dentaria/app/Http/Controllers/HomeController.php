<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;

class HomeController extends Controller
{
    //funcao que dereciona o usuario ao seu dashboard
    public function redirect(){
        if(Auth::id()){
            //usuario normal->paciente
                if(Auth::user()->usertype=='0'){
                    $doctor = doctor::all();
                    return view('user.home', compact('doctor'));
                }
                //admin
                else {
                    return view('admin.home');
                }
        } else{
            return redirect()->back();
        }
    }

    public function index(){
        $doctor = doctor::all();
        return view('user.home', compact('doctor'));
    }

    public function doct(){
        $doctor = doctor::all();
        return view('doutores', compact('doctor'));
    }
}

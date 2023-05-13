<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

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
    //funcao que dereciona o usuario ao seu dashboard
    public function index(){
        if(Auth::id()){
            return redirect('home');
        } else{
          $doctor = doctor::all();
          return view('user.home', compact('doctor'));  
        }
        
    }
    //funcao que dereciona a pagina dos doutores
    public function doct(){
        $doctor = doctor::all();
        return view('doutores', compact('doctor'));
    }
    //funcao que permite fazer marcacoes
    public function appointment(Request $request){
        $data = new appointment;
        $data->name=$request->name;

        $data->email=$request->email;
        
        $data->date=$request->date;
        
        $data->phone=$request->number;
        
        $data->message=$request->message;
        
        $data->doctor=$request->doctor;
        
        $data->status='Em progresso';

        if(Auth::id()){
           $data->user_id=Auth::user()->id; 
        }
        
        $data->save();

        return redirect()->back()->with('message', 'MARCACAO FEITA COM SUCESSO. IREMOS CONTACTA-LO BREVEMENTE');

    }
    //funcao que retorna a view de consultas feitas pelo usuario
    public function myappointment(){
      return view('user.my_appointment');  
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Appointment;

class AdminController extends Controller
{
    //funcao que retorna a view dos medicos
    public function addview(){
        return view('admin.add_doctor');
    }
    //funcao que insere dados dos medicos
    public function upload(Request $request){
        $doctor=new doctor;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;

        $doctor->name=$request->name;
        $doctor->gender=$request->gender;
        $doctor->speciality=$request->speciality;
        $doctor->phone=$request->phone;
        $doctor->email=$request->email;

        $doctor->save();

        return redirect()->back()->with('message', 'Medico adicionado com sucesso');
    }
    //funcao para listar as marcacoes dos usuarios
    public function showappointment(){
        $data=appointment::all();
        return view('admin.showappointment', compact('data'));
    }

}

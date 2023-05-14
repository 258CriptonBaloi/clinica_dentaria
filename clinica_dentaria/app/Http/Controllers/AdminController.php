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
    //funcao para aprovar marcacoes
    public function approved($id){
        $data=appointment::find($id);
        
        $data->status='Aprovado';

        $data->save();

        return redirect()->back();
    }
    //funcao para cancelar marcacoes
    public function canceled($id){
        $data=appointment::find($id);
        
        $data->status='Cancelado';

        $data->save();

        return redirect()->back();
    }
    //funcao para listar medicos 
    public function showdoctor(){
        $data = doctor::all();
        return view('admin.showdoctor', compact('data'));
    }
    //funcao para eleminar dados dos medicos 
    public function deletedoctor($id){
        $data = doctor::find($id);
        
        $data->delete();

        return redirect()->back();
    }
    //funcao para atualizar dados dos medicos 
    public function updatedoctor($id){
        $data = doctor::find($id);
        return view('admin.update_doctor', compact('data'));
    }
    //funcao para atualizar dados dos medicos 
    public function editdoctor(Request $request, $id){
        $doctor = doctor::find($id);

        $doctor->name=$request->name;

        $doctor->gender=$request->gender;

        $doctor->speciality=$request->speciality;

        $doctor->phone=$request->phone;

        $doctor->email=$request->email;

        $image=$request->file;

        if($image){

        $imagename=time().'.'.$image->getClientOriginalExtention();

        $request->file->move('doctorimage', $imagename);

        $doctor->image=$imagename;
        }

        $doctor->save();

        return redirect()->back();
    }


}

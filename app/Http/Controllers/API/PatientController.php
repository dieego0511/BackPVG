<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Patient;
Use Log;

class PatientController extends Controller
{
    //CRUD Methods from de API endpoint

    //Get all elements in the table patient 
    public function getAll(){
        $data = Patient::get();
        return response()->json($data, 200);
    }

    public function create(Request $request){
        $data['name'] = $request['name'];
        $data['email'] = $request['email'];
        $data['phone'] = $request['phone'];
        Patient::create($data);
        return response()->json([
            'message' => "Paciente Creado con exito",
            'success' => true
        ], 200);
    }

    public function get($id){
        $data = Patient::find($id);
        return response()->json($data, 200);
    }


    public function delete($id){
        $res = Patient::find($id)->delete();
        return response()->json([
            'message' => "Paciente Eliminado con exito",
            'success' => true
        ], 200);
    }


    public function update(Request $request, $id){
        $data['name'] = $request['name'];
        $data['email'] = $request['email'];
        $data['phone'] = $request['phone'];
        Patient::find($id)->update($data);
        return response()->json([
            'message' => "Paciente Editado con exito",
            'success' => true
        ], 200);
    }




}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\citas;
Use Log;

class CitasController extends Controller
{
    //Get all elements in the table patient 
    public function getAll(){
        $data = citas::join('patient', 'pac_id', '=', 'patient.id')
                    ->select('citas.*', 'patient.name')
                    ->get();
        return response()->json($data, 200);
    }

    public function create(Request $request){
        $data['pac_id'] = $request['pac_id'];
        $data['observations'] = $request['observations'];
        $data['created_at'] = $request['created_at'];
        citas::create($data);
        return response()->json([
            'message' => "Cita Creada con exito",
            'success' => true
        ], 200);
    }

    public function get($id){
        $data= citas::where('date_id', '=', $id)
                    ->join('patient', 'pac_id', '=', 'patient.id')
                    ->select('citas.*', 'patient.name')
                    ->get();
        dd($data);
        return response()->json($data, 200);
    }


    public function delete($id){
        $res = citas::where('date_id', '=', $id)->delete();
        return response()->json([
            'message' => "Cita Eliminada con exito",
            'success' => true
        ], 200);
    }


    public function update(Request $request, $id){
        $data['pac_id'] = $request['pac_id'];
        $data['observations'] = $request['observations'];
        $data['update_at'] = $request['update_at'];
        citas::find($id)->update($data);
        return response()->json([
            'message' => "Cita Editada con exito",
            'success' => true
        ], 200);
    }
}

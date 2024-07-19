<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Redess;
use Http;

class UtilController extends Controller
{
    public function consultaDNI(Request $request){

        $dni = $request->dni;

        $response  = Http::get('https://api.apis.net.pe/v1/dni?numero='.$dni);
        $data = $response->object();
        return json_encode($data);
    }
    public function consultaIPRESS(Request $request){
        $codigo = $request->codigo;
        $data = Redess::find($codigo);
        if($data != null){
            $data->status = "success";
            return json_encode($data);
        }
        else{
            $data = new \stdClass();
            $data->status = "fail";
            return json_encode($data);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\usuarios_admin;

class usuariosAdminController extends Controller
{
    public function usuarios(){
        $query = \DB::table('usuarios_admin')
        ->select('id',
        'titulo',
        'nombre',
        'ap_paterno',
        'email',
        DB::raw('IF(activo = "1", "Activo", "No activo") AS activo'))
        ->get();
        
        $consultaUsuario = $this->json($query);

        return view('usuariosOp', compact('consultaUsuario'));
    }

    public function json($query){
        $consult = array();
        foreach($query as $value){
            array_push($consult, array(
                'id' => $value -> id,
                'a'  => $value -> nombre,
                'b'  => $value -> ap_paterno,
                'c'  => $value -> email,
                'd'  => $value -> titulo,
                'e'  => $value -> activo,  
            ));
        }
        return $consult;
    }
}

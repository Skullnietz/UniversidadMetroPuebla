<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use App\Models\usuarios_admin;

class usuariosAdminController extends Controller
{
    public function admin(){
        $query = \DB::table('usuarios_admin')
        ->select('id',
        'titulo',
        'nombre',
        'ap_paterno',
        'email',
        DB::raw('IF(activo = "1", "Activo", "No activo") AS activo'))
        ->get();
        
        $consulta = $this->json($query);

        return view('layouts.catalogos.usuariosAdmin', compact('consulta'));
    }

    public function json($query){

        function options( $value, $value2 ){
            $parameter= Crypt::encrypt($value2);

            if($value=='1'){
                
                $btn = "<a href='".url("")."' type='submit' class='btn btn-xs btn-danger'><i class='ace-icon fa fa-trash-o bigger-120'> Eliminar</i></a><br>".
                        "<a href='".url("")."' type='submit' class='btn btn-xs btn-info'><i class='ace-icon fa fa-pencil bigger-120'> Editar</i></a><br>".
                        "<a href='".url("")."' type='submit' class='btn btn-xs btn-warning'><i class='ace-icon fa fa-download bigger-120'> Descargar PDF</i></a><br>";
            }else{
                $btn = "<a href=".url("/restaurarOrden/{$value2}")." type='submit' class='btn btn-xs btn-warning'>Restaurar</a>";
            }
            
            return $btn;
            
        }

        $consult = array();
        foreach($query as $value){
            array_push($consult, array(
                'id' => $value->id,
                'a'  => $value->nombre,
                'b'  => $value->ap_paterno,
                'c'  => $value->email,
                'd'  => $value->titulo,
                'e'  => $value->activo,  
                'f'  => options( $value->activo, $value->id),
            ));
        }
        return $consult;
    }
}

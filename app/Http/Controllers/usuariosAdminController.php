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

            if($value=='Activo'){
                
                $btn =  "<a href='".url("")."' type='submit' class='btn btn-sm btn-info'><i class='ace-icon fa fa-pencil-square-o bigger-120'></i></a>".
                        "<a href='".url("")."' type='submit' class='btn btn-sm btn-danger'><i class='ace-icon fa fa-trash-o bigger-120'></i></a>";
                        
            }else{
                $btn = "<a href=".url("/restaurarOrden/{$value2}")." type='submit' class='btn btn-sm btn-warning'><i class='ace-icon fa fa-repeat bigger-120'> Restaurar</i></a>";
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

    public function Guardar(){

    }
}

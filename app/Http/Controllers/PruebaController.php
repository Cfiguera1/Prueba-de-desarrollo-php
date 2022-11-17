<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;



use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use DataTables;

class PruebaController extends Controller
{
    public function index(Request $request){
    if($request->ajax()){
        $consulta = DB::select('CALL spsel_data()');
        return DataTables::of($consulta)
            ->addColumn('action', function($consulta){
                $acciones = '<a href="javascript:void(0)" onclick="editarConsulta('.$consulta->id.')" class="btn btn-info btn-sm text-center"> &nbsp&nbspEditar&nbsp</a> ';
                $acciones .= '<button type="button" name="delete" id="'.$consulta->id.'" class= "delete btn btn-danger btn-sm"> Eliminar</button>';
                return $acciones;
            })
    
            ->rawColumns(['action'])
            ->make(true);
        }

           

        return view ('prueba.index');
    }
    public function registrar(Request $request){
        $prueba = DB::select('call spcre_data(?,?,?,?,?,?,?)',
        [$request->nombre,$request->codigo,$request->unidad,$request->valor,$request->fecha,$request->tiempo,$request->origen]);
    
        return back();
    }

    public function eliminar($id){

        $prueba = DB::select('call spdel_data(?)', [$id]);
        return back();
    }

    public function editar($id){
        $prueba = DB::select('call spseled_data(?)', [$id]);
        return response()->json($prueba);

    }
    public function actualizar(Request $request){
        $prueba = DB::select('call spud_data(?,?,?,?,?,?,?,?)',
        [$request->id,$request->nombre,$request->codigo,$request->unidad,$request->valor,$request->fecha,$request->tiempo,$request->origen]);
        return back();
    }
    function buscar(Request $request)
    {
     if($request->ajax())
     {
      if($request->from_date != '' && $request->to_date != '')
      {
       $data = DB::table('pruebas')
         ->whereBetween('fechaIndicador', array($request->from_date, $request->to_date))
         ->get();
      }
      else
      {
       $data = DB::select('CALL busqueda_arreglada()');
      }
      echo json_encode($data);
     }
    }
  
    }
    
    
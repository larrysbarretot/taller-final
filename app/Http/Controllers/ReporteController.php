<?php
/**
* 
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Reporte;


class ReporteController extends Controller
{
	
	public function home(){

		$reporte=Reporte::all();
		
		return view('Reporte.VentasporMes',["reportes"=>$reporte]);
		
		

	}
}
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class pagesController extends Controller
{
	//Llama al archivo welcome para que muestre su contenido

	//Array de las ofertas, la cual es pintada en el archivo ofertas
	public function ofertas($nombre = null){

		$listaOfertas = ['Tabla Multiplicar', 'Bubble Sort', 'Tabla de Variables'];

	return view('welcome',compact('listaOfertas','nombre'));
	}


}

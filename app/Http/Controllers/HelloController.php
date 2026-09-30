<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Clase HelloController
class HelloController extends Controller
{
    //Crear una funcion que cambie el nombre mostrado en la vista
    public function index(Request $request)
    {
        //Variable $name que almacena el parámetro name de la petición
        //En el caso de que no la encuentre, su valor por defecto será Puenteuropa
        $name = $request->query('name', 'Puenteuropa');

        //Devuelve la vista hello pero con el parámetro 'name' como el valor de la variable $name
        return view('app', [
            'name' => $name
        ]);
    }
}
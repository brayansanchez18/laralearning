<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //TODO: cuando creamos un contrlador que administra una unica tura lo que podemos hacer es definis un metodo llamado __invoke
    public function __invoke()
    {
        // recuperamos el registro de todos los cursos
        //$courses = Course::all();
        // retcuperamos todos los cursos pero los filtramos solo los que tengan el status de publicado
        //latest() = ordenar los registros que recupere de forma decendente
        $courses = Course::where('status', '3')->latest('id')->get();
        return view('welcome', compact('courses'));
    }
}

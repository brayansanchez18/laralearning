<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        return view('courses.index');
    }

    public function show(Course $course)
    {
        // recuperaamos el registro de los cursos similares
        // que el id sea similar al id del curso que se esta visitando
        $similares = Course::where('category_id', $course->category_id)
            // que me recupere los registros sin tomar en cuenta el curso que estamos visitando
            ->where('id', '!=', $course->id)
            // devulve solo los cursos que esten publicados
            ->where('status', 3)
            // ordenalo deacuerdo al campo id
            ->latest('id')
            //solo muestrame 5 registros
            ->take(5)
            ->get();

        // le pasamos el valor de la variable a la vista
        return view('courses.show', compact('course', 'similares'));
    }
}

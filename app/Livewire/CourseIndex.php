<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Category;
use App\Models\Level;
use Livewire\WithPagination;

class CourseIndex extends Component
{
    // con esto hacemos que la paginacion reaccione sin necesidad de recargar la pagina
    use WithPagination;

    public $category_id;
    public $level_id;

    public function render()
    {
        $categories = Category::all();
        $levels = Level::all();
        // traeme todos los cursos cullo estado sea publicado, ordenamelos por id y muestrameloso paginados de 8 en 8
        $courses = Course::where('status', 3)
            ->category($this->category_id)
            ->level($this->level_id)
            ->latest('id')
            ->paginate(12);
        // le pasaamos el arreglo a la vista
        return view('livewire.course-index', compact('courses', 'categories', 'levels'));
    }

    public function resetFilters()
    {
        // reseteamos los valores de las variable
        $this->reset('category_id', 'level_id');
    }
}

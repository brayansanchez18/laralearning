@props(['course'])

<article class="card flex flex-col bg-white shadow-lg rounded overflow-hidden">
    <img class="h-36 w-full object-cover" src="{{ Storage::url($course->image->url) }}">

    <div class="card-body flex-1 flex flex-col px-6 py-4">
        <h1 class="card-title text-xl text-gray-700 mb-2 leading-6">
            @can('enrolled', $course )
                <i class="fas fa-check-circle text-green-600 -ml-5"></i>
            @endcan
            {{Str::limit($course->title,38)}}
        </h1>

        <p class="text-gray-500 text-sm mb-2 mt-auto">Prof: {{$course->teacher->name}}</p>

        <div class="flex">
        <ul class="flex text-sm">
            <li class="mr-1">
                <i class="fas fa-star text-{{ ($course->rating >= 1) ? 'yellow' : 'gray'}}-400"></i>
            </li>
            <li class="mr-1">
                <i class="fas fa-star text-{{ ($course->rating >= 2) ? 'yellow' : 'gray'}}-400"></i>
            </li>
            <li class="mr-1">
                <i class="fas fa-star text-{{ ($course->rating >= 3) ? 'yellow' : 'gray'}}-400"></i>
            </li>
            <li class="mr-1">
                <i class="fas fa-star text-{{ ($course->rating >= 4) ? 'yellow' : 'gray'}}-400"></i>
            </li>
            <li class="mr-1">
                <i class="fas fa-star text-{{ ($course->rating == 5) ? 'yellow' : 'gray'}}-400"></i>
            </li>
        </ul>
            <p class="text-sm text-gray-500 ml-auto">
                <i class="fas fa-users"></i>
                ({{$course->students_count}})
            </p>
        </div>

        @if($course->price->value==0)
            <p class="my-2 text-gray-600  italic  font-bold text-center">¡GRATIS!</p>
        @else
            <p class="my-2 text-gray-500 font-bold text-center">$US {{$course->price->value}}</p>
        @endif
        <!-- component -->
        <a href="{{route('courses.show', $course)}}" class="text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            @can('enrolled', $course )
                Seguir curso
            @else
                Mas información
            @endcan
        </a>

    </div>
</article>

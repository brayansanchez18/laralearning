<x-app-layout>
    {{-- Listado de cursos --}}
    <div class="max-w-7xl mt-6 mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($courses as $course)
            <article class="card">
            <img class="h-36 w-full object-cover" src="{{ Storage::url($course->image->url) }}">

            <div class="card-body flex-1 flex flex-col">
                <h1 class="card-title">
                    <i class="fas fa-check-circle text-green-600 -ml-5"></i>
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

                <!-- component -->
                <a href="{{route('courses.show', $course)}}" class="mt-4 btn btn-primary btn-block">
                    Seguir curso
                </a>

            </div>
        </article>
        @endforeach
    </div>
</x-app-layout>

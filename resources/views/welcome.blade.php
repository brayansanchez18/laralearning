<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/home/banner.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:2-1/2">
                <h1 class="text-white font-bold text-4xl">Domina la tecnología web con LaraLearning</h1>
                <p class="text-white text-lg mt-2 mb-4">En LaraLearning encontrarás cursos que te ayudarán a convertirte en un profesional del desarrollador web</p>
            <form class="pt-2 relative mx-auto text-gray-600" autocomplete="off">
                <input wire:model="search" class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                type="search" name="search" placeholder="Buscar cualquier cosa...">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2">
                    Buscar
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section class="mt-6">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/curso1.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Lorem, ipsum dolor.</h1>
                    <p class="text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis necessitatibus veritatis aspernatur.</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/curso2.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Lorem, ipsum.</h1>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur veritatis deleniti voluptate?</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/curso3.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Lorem, ipsum dolor.</h1>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat veniam atque amet?</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/curso4.jpg')}}" alt="">
                </figure>
                    <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Lorem, ipsum.</h1>
                    <p class="text-sm text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium culpa quod vero.</p>
                </header>
            </article>
        </div>
    </section>

    <section class="mt-6 bg-gray-700 py-6">
        <h1 class="text-center text-white text-3xl">¿No sabes que curso llevar?</h1>
        <p class="text-center text-white">Dirígete al catálogo de cursos y filtralos por categoría o nivel</p>

        <div class="flex justify-center mt-4">
            <!-- component -->
            <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Catálogo de cursos
            </a>
        </div>
    </section>

    <section class="my-8">
        <h1 class="text-gray-600 text-center text-3xl">ÚLTIMOS CURSOS</h1>
        <p class="text-sm text-center text-gray-500 mb-6">Lorem ipsum dolor sit amet consectetur.</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
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
                        <a href="{{route('course.show', $course)}}" class="text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            @can('enrolled', $course )
                                Seguir curso
                            @else
                                Mas información
                            @endcan
                        </a>

                    </div>
                </article>
            @endforeach
        </div>
    </section>
</x-app-layout>

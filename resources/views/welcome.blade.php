<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/home/banner.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:2-1/2">
                <h1 class="text-white font-bold text-4xl">Domina la tecnología web con LaraLearning</h1>
                <p class="text-white text-lg mt-2 mb-4">En LaraLearning encontrarás cursos que te ayudarán a convertirte en un profesional del desarrollador web</p>
                @livewire('search')
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
                <x-course-card :course="$course"></x-course-card>
            @endforeach
        </div>
    </section>

    <x-footer></x-footer>
</x-app-layout>

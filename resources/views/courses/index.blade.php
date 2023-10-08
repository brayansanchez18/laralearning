<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/home/banner2.jpg')}})">
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

    @livewire('course-index')
</x-app-layout>


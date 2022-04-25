
<br>
{{-- {{$autor}} --}}

<x-monografias>

    <div
    class="outline-none mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">

    <a href="{{ '/autores' }}">Volver autores</a>
</div>
<div
class="outline-none mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">

<a href="{{ '/articulos' }}">Volver articulos</a>
</div>

<br>



   

        <!-- Card 1 -->
        <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
            <img class="h-56 lg:h-60 w-full object-cover" 
            src="https://www.escueladeescritores.com/masalladeorion/wp-content/uploads/2018/02/technology-3167297_1920-1280x640.jpg">
            <div class="p-3">
                <h1 class="text-center font-bold text-2xl text-blue-500">
                    <span class="text-sm text-primary text-gray-700">Autor</span>
                    {{ $autor->nombre }} 
                </h1>
                <p class="paragraph-normal text-blue-400">
                    Articulos
                </p>
                @foreach ($autor->articulos as $articulo)
                    <p class="paragraph-normal text-blue-800">
                        -{{ $articulo->titulo }}
                    </p>
                @endforeach
                <br>
            </div>
        </div>


</x-monografias>
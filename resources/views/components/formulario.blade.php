{{ $slot }}
  <div class="mb-6">
      <label for="titulo"
          class="text-sm font-medium text-gray-900 block mb-2 @error('titulo') text-red-500 @enderror">
          Título
      </label>
      <input type="text" name="titulo" id="titulo"
          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('titulo') border-red-500 @enderror"
          value="{{ old('titulo', $monografia->titulo) }}">
      @error('titulo')
          <p class="text-red-500 text-sm mt-1">
              {{ $message }}
          </p>
      @enderror
  </div>


  <div class="mb-6">
      <label for="anyo"
          class="text-sm font-medium text-gray-900 block mb-2 @error('anyo') text-red-500 @enderror">
          año
      </label>
      <input type="text" name="anyo" id="anyo"
          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('anyo') border-red-500 @enderror"
          value="{{ old('anyo', $monografia->anyo) }}">
      @error('anyo')
          <p class="text-red-500 text-sm mt-1">
              {{ $message }}
          </p>
      @enderror
  </div>


  <div class="outline-none mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">
    
    <p>Agregar articulos  </p>
</div>


@php

$arrayId = array();
foreach ($monografia->articulos as $key => $articulo) {
    array_push($arrayId,  $articulo->id); 

}

//dd($arrayId);
    //echo ($monografia->articulos[6]->titulo)

@endphp

{{-- @dd($monografia->articulos[6]->titulo) --}}

  @foreach ($articulos as $articulo)
     {{--  {{$articulo->id}}  --}}
      {{-- {{$monografia->articulos[$articulo->id-1]->id}} --}}
  <label class="inline-flex items-center mt-3">
    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" 
        name="articulos[]" value="{{$articulo->id}}" 
        
        {{-- marcar los articulos por defecto   --}}

        


         @if (in_array($articulo->id,$arrayId))
        {{--  $articulo->id==$monografia->articulos[$articulo->id-1]->id) --}}
        checked
        @endif 

        {{-- checked --}}>
    <span class="ml-2 text-gray-700">{{$articulo->titulo}}</span>
</label>
<br>

  @endforeach

  <br>
  <button type="submit"
  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Enviar</button>
</form>

{{-- <input type="checkbox" value="España" name="countries[]" /><label>España</label><br/>
<input type="checkbox" value="Portugal" name="countries[]" /><label>Portugal</label><br/>
<input type="checkbox" value="Francia" name="countries[]" /><label>Francia</label><br/> --}}
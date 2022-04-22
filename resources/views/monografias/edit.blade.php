<x-monografias>

    <h1>monografias edit</h1>

    {{$monografia}}

    <div class="outline-none mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">
    
        <a href="{{'/monografias'}}">Volver</a>
    </div>
    
    <br>

    <form action="{{ route('monografias.update', [$monografia], false) }}" method="POST"
    enctype="multipart/form-data">
  @csrf
  @method('PUT')
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
          anyo
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
  <button type="submit"
      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Enviar</button>
  <a href="/monografias" class="mt-4 text-blue-900 hover:underline">Volver</a>
</form>
</x-monografias>

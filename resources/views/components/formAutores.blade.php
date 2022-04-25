
    {{ $slot }}

    @csrf
    
@error('nombre')

<br>
    <p class="text-red-600">{{$message}}</p>

@enderror
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" id="nombre"
    value="{{ old('nombre', $autor->nombre) }}">
   




    <br>
    <button type="submit">Enviar</button>

</form>

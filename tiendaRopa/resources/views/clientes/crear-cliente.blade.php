<h1>{{ $titulo}}</h1>
<form  method="post" action="{{ route('clientes.store') }}">
    @csrf
    <label for="nombre">nombre: </label>
    <input type="text" name="nombre"> <br>
    <label for="apellido">apellido: </label>
    <input type="text" name="apellido"> <br>
    <label for="domicilio">domicilio: </label>
    <input type="text" name="domicilio"> <br>
    <label for="telefono">telefono: </label>
    <input type="text" name="telefono"> <br>
    <label for="mail">mail: </label>
    <input type="text" name="mail"> <br>
    <label for="edad">edad: </label>
    <input type="text" name="edad"> <br>
    <button type="submit">Agregar</button>
</form>
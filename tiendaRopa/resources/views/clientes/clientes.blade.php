<h1>{{$titulo}}</h1>
<form action="clientes" method="get">
    <label for="idCliente">id: </label>
    <input type="text" name="idCliente"> <br>
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
    <button type="submit">Buscar</button>
</form>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>domicilio</th>
            <th>telefono</th>
            <th>mail</th>
            <th>edad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->idCliente}}</td>
                <td>{{ $cliente->nombre}}</td>
                <td>{{ $cliente->apellido}}</td>
                <td>{{ $cliente->domicilio}}</td>
                <td>{{ $cliente->telefono}}</td>
                <td>{{ $cliente->mail}}</td>
                <td>{{ $cliente->edad}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
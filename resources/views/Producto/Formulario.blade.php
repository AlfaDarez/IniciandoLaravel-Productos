<form action="{{route('Producto.store')}}" method="post">
    {{ csrf_field() }}

    <label for="">Nombre</label><input type="text" name="Nombre"> <br>
    <label for="">Descripcion</label><input type="text" name="Descripcion"> <br>
    <label for="">Cantidad</label><input type="text" name="cantidad"> <br>
    
<input type="submit" value="Enviar">

</form>
<h1>Editar Producto</h1> <br>

<form action="{{route('Producto.update',$producto->id)}}" method="Post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
  
    <label for="">Nombre</label><input type="text" value="{{ $producto->Nombre }}" name="Nombre"> <br>
    <label for="">Descripcion</label><input type="text" value="{{ $producto->Descripcion}}"  name="Descripcion"> <br>
    <label for="">Cantidad</label><input type="text" value="{{$producto->cantidad}}" name="cantidad"> <br>
    
<input type="submit" value="Enviar">



</form>
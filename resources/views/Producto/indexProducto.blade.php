
@foreach ($Productos as $producto)
<h3>
   
   ID:<a href="{{route('Producto.show', $producto->id)}}"> {{$producto->id}} </a><br>
   Nombre: <a href="{{route('Producto.edit',$producto->id)}}"> {{$producto->Nombre}}</a>  <br>
   Detalle: {{$producto->Descripcion}} <br>
   Stok: {{$producto->cantidad}} <br>

  

   <form action="{{route('Producto.destroy', $producto->id )}}" method="post">
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
      <input type="submit" value="Eliminar">
   </form>
   

</h3>

@endforeach



<a href="{{route('Producto.create')}}"> Nuevo producto</a>



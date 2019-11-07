<h1 style="background:yellow"> Cabecera</h1>

@if(isset($nombre) && isset($edad))
<h2>{{$nombre}} y {{$edad}} pertenecen a la cabecera</h2>
@endif
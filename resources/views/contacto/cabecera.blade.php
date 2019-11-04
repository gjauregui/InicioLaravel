<h1 style="background:yellow"> Cabezera</h1>

@if(isset($nombre) && isset($edad))
<h2>{{$nombre}} {{$edad}}</h2>
@endif
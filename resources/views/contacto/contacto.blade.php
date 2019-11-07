@include('contacto/cabecera', ['nombre'=>$nombre,
                                'edad =>$edad'])

<h1>Hola mi nombre es  {{$nombre}}</h1>

@if(!isset($edad))
    no existe la edad
@else
 TENGO {{$edad}}  AÑOS
@endif        

<p>
    <?php $numero = 5;?>
Tabla del {{$numero}}
</p>
@for ($i=1; $i<=10; $i++)
    {{$i.'x'.$numero.'='. ($i*$numero)}} <br/>
@endfor

<p>
    <?php $n = 2;
          $f =1;  ?>
tabla del {{$n}}
</p>
@while($f <=10)
    {{$f.'x'.$n.'='.($f*$n)}} <br/>
    <?php $f++ ?>
@endwhile

<h1>
Listado de frutas
</h1>
@foreach ($frutas as $fruta)
    {{$fruta}} <br/>
@endforeach
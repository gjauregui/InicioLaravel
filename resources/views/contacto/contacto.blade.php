@include('contacto/cabecera', ['nombre'=>$nombre,
                                'edad =>$edad'])

<h1>Hola mi nombre es {{$nombre}} y mi edad es {{--$edad--}} </h1>

@if(is_null($edad))
    No existe la edad
@else 
    Si existe la edad: {{$edad}}
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
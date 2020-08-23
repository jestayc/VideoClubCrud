@extends ('layout.admin')
@section ('contenido')

<div class="row">
    <h3>Detalle de la Película</h3>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <img src="{{asset('/imagenes/catalogo/'.$catalogos->poster)}}" alt="Sin imagen">
    </div>

    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
        <h1>{{$catalogos->title}}</h1>
        <h2>Año: {{$catalogos->year}}</h2>
        <h2>Director: {{$catalogos->director}}</h2>
        <p><h3>Resumen:</h3> {{$catalogos->synopsis}}</p>
        <?php
        $dd = $catalogos->rented;
        if ($dd == '1') {
        ?>    
            <p style="color:green">Película Disponible</p>
        <?php
        } else {
        ?>
            <p>Pelicula actualmente alquilada</p>
        <?php
        }
        ?>

        <?php
        $dd = $catalogos->rented;
        if ($dd == '1') {
        ?>    
        <button class="btn btn-danger">Alquilar película</button></a>
        <?php
        } else {
        ?>
        <a href="{{URL::action('CatalogController@updaterentedtrue', $catalogos->id)}}"><button class="btn btn-danger">Devolver película</button></a>
        <?php
        }
        ?>
        <a href="{{URL::action('CatalogController@edit', $catalogos->id)}}"><button class="btn btn-info">Editar Película</button></a>
        <a href="{{URL::action('CatalogController@index')}}"><button class="btn btn-info">Volver al listado</button></a>
    </div>      
</div>


@endsection
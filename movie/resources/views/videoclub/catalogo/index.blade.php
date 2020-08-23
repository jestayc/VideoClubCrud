@extends ('layout.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>LISTADO DE CATEGORIAS <a href="catalogo/create"><button class="btn btn-success">Nuevo</button></a></h3>
            @include('videoclub.catalogo.search')
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Ano</th>
                        <th>Director</th>
                        <th>Poster</th>
                        <th>Resumen</th>
                        <th>Opciones</th>
                    </thead>
                    @foreach ($catalogos as $cat)
                    <tr>
                        <td>{{ $cat->id}}</td>
                        <td>{{ $cat->title}}</td>
                        <td>{{ $cat->year}}</td>
                        <td>{{ $cat->director}}</td>
                        <td>
                            <img class="img_catalogo" src="{{asset('/imagenes/catalogo/'.$cat->poster)}}" alt="Sin imagen">
                        </td>
                        <td>{{ $cat->synopsis}}</td>
                        <td>
                            <a href="{{URL::action('CatalogController@edit', $cat->id)}}"><button class="btn btn-info">Editar</button></a>
                            <a href="{{URL::action('CatalogController@show', $cat->id)}}"><button class="btn btn-info">Ver</button></a>
                            <br>
                            <br>
                            <form action="{{ route('catalogo.destroy',$cat->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>  
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            {{$catalogos->render()}}
        </div>
    </div>
@endsection
@extends ('layout.admin')
@section ('contenido')
   <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">    
            <h3>Editar Película: {{$catalogos->title}}</h3>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            </div>
            @endif

            {!! Form::model($catalogos, ['route'=>['catalogo.update', $catalogos->id], 'method' => 'PUT', 'files'=>'true']) !!}
                {{Form::token()}}
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" name="title" class="form-control" value="{{$catalogos->title}}">

                        <label for="year">Año</label>
                        <input type="text" name="year" class="form-control" value="{{$catalogos->year}}">

                        <label for="director">Director</label>
                        <input type="text" name="director" class="form-control" value="{{$catalogos->director}}">

                        <label for="poster">Poster</label>
                        <input type="file" name="poster" class="form-control" value="{{$catalogos->poster}}">

                        <label for="title">Sinopsis</label>
                        <textarea class="form-control" name="synopsis" rows="3" value="">{{$catalogos->synopsis}}</textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Editar película</button>
                        <button class="btn btn-danger" type="reset">Limpiar</button>
                    </div>
            {!! Form::close() !!}
        </div>
   </div>
@endsection
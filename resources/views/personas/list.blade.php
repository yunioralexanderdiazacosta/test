@extends('app')
@section('content')
<div class="row m-0">
    <div class="col-lg-12 text-center">
        <img src="{{url('/images/logo.png')}}">
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-4">
                <form method="GET" action="/">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Filtrar Cédula" name="cedula" minlength="6" required="" maxlength="6">
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-8 text-right">
                <a class="btn btn-danger mb-3" href="/personas/reporte" target="_blank">
                    <i class="fas fa-file-pdf"></i> Reporte
                </a>
                <a class="btn btn-primary mb-3" href="{{route('personas.create')}}">
                    <i class="fas fa-plus"></i> Nueva Persona
                </a>
            </div>
        </div>
        
        <table class="table table-bordered">
            <thead>
                <tr class="text-center bg-dark">
                    <th>#</th>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Correo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($personas as $persona)
                <tr>
                    <td><b>{{ $persona->id }}</b></td>
                    <td>{{ $persona->cedula }}</td>
                    <td>{{ $persona->nombre }}</td>
                    <td>@if($persona->cargo_id) 
                           {{ $persona->cargo->nombre}}
                        @else 
                            Ninguno
                        @endif 
                    </td>
                    <td>{{ $persona->correo }}</td>
                    <td>
                        <div class="btn-group">
                        <a href="{{route('personas.edit', $persona->id)}}" class="btn btn-link">
                            <span class="h4"><i class="fas fa-edit text-info"></i></span>
                        </a>

                        <form method="POST" action="/delete/{{$persona->id}}">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                            <button type="submit" class="btn btn-link" onclick="return confirm('Estas seguro de que deseas eliminar el registro')">
                               <span class="h4"><i class="fas fa-trash text-danger"></i></span>
                            </button>
                        </form>

                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="float-right"> 
            {{ $personas->render() }}
        </div>
        </div>
    </div>
</div>
@include('personas.scripts')

<script>
     $(document).ready(function(){
        $('#modalEstadisticas').on('shown.bs.modal', function (event) {
            personasPorCargo()
        })
    })
</script>
@endsection
@extends('app')
@section('content')
<div class="row">
    <div class="col-lg-8 offset-md-2">
        <ul class="breadcrumb bg-info">
            <li class="breadcrumb-item">
                <a href="{{ route('personas.index') }}" style="text-decoration: none">Inicio</a>
            </li>
            <li class="breadcrumb-item active">
                Editar
            </li>
        </ul>

        <div class="card">
            <div class="card-header">
                <h5 class="text-center"><i class="fas fa-user"></i> Editar Persona</h5>
            </div>
            <div class="card-body">
                @include('common.errors')
                <form class="form-group" method="POST" action="/update/{{ $persona->id }}" novalidate>
                @csrf
                    <div class="form-group">
                        <label>Cédula de Identidad</label>
                        <input type="text" name="cedula" class="form-control" placeholder="Ingrese cédula" maxlength="6" minlength="6" value="{{ $persona->cedula }}">
                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre" value="{{ $persona->nombre }}">
                    </div>

                    <div class="form-group">
                        <label>Correo Eléctronico</label>
                        <input type="email" name="correo" class="form-control" placeholder="Ingrese correo eléctronico" value="{{ $persona->correo }}">
                    </div>

                    <div class="form-group">
                        <label>Cargo</label>
                        <select class="form-control" name="cargo_id">
                            <option value="">Ninguno</option>
                            @foreach($cargos as $cargo)
                            <option value="{{$cargo->id}}" 
                            @if($cargo->id == $persona->cargo_id) selected @endif>{{ $cargo->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="fas fa-sync"></i> Actualizar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
   

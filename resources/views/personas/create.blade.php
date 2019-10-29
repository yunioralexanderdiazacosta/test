@extends('app')
@section('content')
<div class="row">
    <div class="col-lg-8 offset-md-2">
        <ul class="breadcrumb bg-info">
            <li class="breadcrumb-item">
                <a href="{{ route('personas.index') }}" style="text-decoration: none">Inicio</a>
            </li>
            <li class="breadcrumb-item active">
                Agregar
            </li>
        </ul>

        <div class="card">
            <div class="card-header">
                <h5 class="text-center"><i class="fas fa-user"></i> Agregar Persona</h5>
            </div>
            <div class="card-body">
                @include('common.errors')
                <form class="form-group" method="POST" action="/store" novalidate>
                @csrf
                    <div class="form-group">
                        <label>Cédula de Identidad</label>
                        <input type="text" name="cedula" class="form-control" placeholder="Ingrese cédula" maxlength="6" minlength="6" value="{{ old('cedula') }}">
                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre" value="{{ old('nombre') }}">
                    </div>

                    <div class="form-group">
                        <label>Correo Eléctronico</label>
                        <input type="email" name="correo" class="form-control" placeholder="Ingrese correo eléctronico" value="{{ old('correo') }}">
                    </div>

                    <div class="form-group">
                        <label>Cargo</label>
                        <select class="form-control" name="cargo_id">
                            <option value="">Ninguno</option>
                            @foreach($cargos as $cargo)
                            <option value="{{$cargo->id}}">{{ $cargo->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-info">
                        <i class="fas fa-save"></i> Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
   

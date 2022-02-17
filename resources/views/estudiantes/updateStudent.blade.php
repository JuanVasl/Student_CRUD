@extends('layouts.index')

@section('title', 'Update')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
            <!-- Mensaje Flash -->
            @if(session('estudianteUpdate'))
                <div class="alert alert-success">
                    {{ session('estudianteUpdate') }}
                </div>
            @endif
        <!-- Validacion de Errores -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card">
                <form action="{{ route('edit', $estudiante->id) }}" method="POST">
                    @csrf @method('PATCH')
                    <div class="card-header text-center">
                        <h3><i class="fas fa-university"></i> Modificar Estudiante</h3>
                    </div>

                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-2">Nombre</label>
                            <input type="text" name="nombre" class="form-control col-md-8" value=" {{ $estudiante->nombre }} ">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2">Apellido</label>
                            <input type="text" name="apellido" class="form-control col-md-8" value=" {{ $estudiante->apellido }} ">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2">Correo</label>
                            <input type="text" name="correo" class="form-control col-md-8" value=" {{ $estudiante->correo }} ">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2">Carrera</label>
                            <input type="text" name="carrera" class="form-control col-md-8" value=" {{ $estudiante->carrera }} ">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2">Semestre</label>
                            <input type="text" name="semestre" class="form-control col-md-8" value=" {{ $estudiante->semestre }} ">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2">Carné</label>
                            <input type="text" name="carne" class="form-control col-md-8" value=" {{ $estudiante->carne }} ">
                        </div>

                        <div class="row form-group">
                            <button type="submit" class="btn btn-outline-success col-md-4 offset-2 mr-3"><i class="fas fa-save"></i> Modificar</button>
                            <a class="btn btn-outline-danger btn-xs col-md-4" href=" {{ url('/') }}"><i class="fas fa-ban"></i> Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection

@extends('layouts.index')

@section('title', 'Read')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <h3 class="text-center mb-5"> Estudiantes Registrados</h3>

            <!-- Boton de registro -->
            <a class="btn btn-outline-success mb-3" href="{{url('/Student/Create')}}"><i class="fas fa-plus-square"></i> Registrar Estudiante</a>

            <!-- Mensaje Flash -->
            @if(session('estudianteDelete'))
                <div class="alert alert-danger">
                    {{ session('estudianteDelete') }}
                </div>
            @endif

            <table class="table table-light table-bordered table-hover text-center">
                <thead class="bg-info">
                <tr>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Correo</td>
                    <td>Carrera</td>
                    <td>Semestre</td>
                    <td>Carne</td>
                    <td>Acciones</td>
                </tr>
                </thead>

                <tbody>
                    @foreach($studets as $student)
                        <tr>
                            <td> {{ $student ->  nombre }} </td>
                            <td> {{ $student ->  apellido }} </td>
                            <td> {{ $student ->  correo }} </td>
                            <td> {{ $student ->  carrera }} </td>
                            <td> {{ $student ->  semestre }} </td>
                            <td> {{ $student ->  carne }} </td>
                            <td>
                                <form action="{{ route('delete', $student->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" onclick="return confirm('¿Seguro que deseas eliminar el Estudiante?')" class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-trash-alt"> Delete</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection

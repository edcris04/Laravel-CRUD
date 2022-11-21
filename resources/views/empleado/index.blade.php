@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{Session::get('mensaje')}}
        
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    
        </div>

    @endif


<a href="{{url('empleado/create')}}" class="btn btn-success">Nuevo registro</a>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $empleados as $empleado)
            <tr class="">
                <td scope="row">{{$empleado->id}}</td>
               <td>
                <a href="{{asset('storage').'/'.$empleado->Foto}}" target="_blank">
               <img src="{{asset('storage').'/'.$empleado->Foto}}"  class="img-fluid img-thumbnail" width="100" alt="">
               </a>
               </td>
               <td>{{$empleado->Nombre }}</td>
               <td>{{$empleado->ApellidoPaterno }}</td>
               <td>{{$empleado->ApellidoMaterno }}</td>
               <td>{{$empleado->Correo}}</td>
               <td>  <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning">Editar</a>| 

               <form action="{{url('/empleado/'.$empleado->id)}}" method="post" class="d-inline">
               @csrf 
               {{method_field('DELETE')}}
               <input type="submit" onclick="return confirm('Quires Borrar?')"  value="Borrar" class="btn btn-danger">
               </form>
               </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $empleados->links() !!}
</div>
@endsection



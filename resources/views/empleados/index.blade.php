@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Empleados</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <th>Telefono</th>
    <th>Proyecto asignado</th>
    <th>Es jefe del Departamento</th>
  </tr>
  @foreach($listaEmpleados as $empleado)
  <tr>
    <td><a href="{{route('empleados.show',$empleado->id)}}">{{$empleado->id}}</a></td>
    <td>{{$empleado->nombre}}</td>
    <td>{{$empleado->apellido}}</td>
    <td>{{$empleado->email}}</td>
    <td>{{$empleado->telefono}}</td>
    <td>@isset($empleado->proyecto)<a href="{{route('proyectos.show',$empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a>@endisset</td>
    <td>@isset($empleado->jefeDepartamento)<a>{{$empleado->jefeDepartamento->id}}</a>@endisset</td>
  </tr>
  @endforeach
</table>

@endsection
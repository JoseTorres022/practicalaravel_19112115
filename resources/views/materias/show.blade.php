@extends('layouts.plnatilla')
@section('titulo','Materia'.$variable)
    @section('contenido')
<h1> <?php echo $variable?> </h1>
<h2>Bienvenido a {($variable)}</h2>

@endsection
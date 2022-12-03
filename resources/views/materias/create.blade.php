@extends('layouts.plantilla')
@section('titulo','Formulario')
    @section('contenido')
    <h1>Este es un formulario para el alte de materias</h1>
    <p>practica laravel, alumnos: jose torres</p>
<form>
    <fieldset>
        <legend>Practica Laravel - Formulario Materias</legend>
        <input type="text" class="form-control">
        <input type="submit" value="Enviar">
    </fieldset>
</form>

@endsection
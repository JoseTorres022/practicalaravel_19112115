<?php 
namespace App\Http\Controllers;
use Iluminate\Http\Request;

class MateriaController extends Controller{
    public function index(){
        return view('materias.index');
        //retunr Bienvenido;
    }
    public function create(){
        return view('materias.create');
        //retunr Bienvenido;
    }
    public function show($materia){
        return view('materias.show',["variable"=>$materia]);
        //retunr Bienvenido;
    }
}
<?php 
namespace App\Http\Controllers;
use Iluminate\Http\Request;

class InicioController extends Controller{
    public function __invoke(){
        return view('welcome');
        //retunr Bienvenido;
    }
}
?>
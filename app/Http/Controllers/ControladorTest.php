<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;

class ControladorTest extends Controller{
    public function root($valor){
        $raiz= sqrt($valor);
        return $raiz;
    }
   
    
    public function Multi($num1,$num2){
        $resultado =$num1*$num2;
        return($resultado);
    }

}
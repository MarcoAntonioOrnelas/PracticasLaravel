<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
   
    public function testraiz():void{
        $a=9;
        $raiz= app('App\Http\Controllers\ControladorTest')->root($a);
        $this->assertEquals(3, $raiz);
    }
    public function testEmpiezconA() : void {
        $pal ="Assert";
        $caracter ="A";
        $this->assertStringStartsWith($caracter,$pal);
    }
    public function testTienepalabra():void{
        $frase = "Hola Gente";
        $palabra = "Hola";
        $this->assertStringContainsString($palabra, $frase);
    }
    public function testMulti():void{
        $multiplicando= 15;
        $multiplicador=4;
        $res = app('App\Http\Controllers\ControladorTest')-> Multi($multiplicando,$multiplicador);
        $this->assertEquals(60,$res);
    }
    public function testEsArreglo() : void {
        $Arreglo = [];
        $this-> assertIsArray($Arreglo);
    }
    
}

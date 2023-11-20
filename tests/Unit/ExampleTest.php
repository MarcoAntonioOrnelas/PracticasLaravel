<?php
namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
class ExampleTest extends TestCase
{
    public function testraiz():void{
        $a=16;
        $raiz= app('App\Http\Controllers\ControladorTest')->root($a);
        $this->assertEquals(3, $raiz);
    }
    public function testEmpiezconA() : void {
        $pal ="Assert";
        $caracter ="B";
        $this->assertStringStartsWith($caracter,$pal);
    }
    public function testTienepalabra():void{
        $frase = "Buenas Tardes";
        $palabra = "Hola";
        $this->assertStringContainsString($palabra, $frase);
    }
    public function testMulti():void{
        $multiplicando= 15;
        $multiplicador=4;
        $res = app('App\Http\Controllers\ControladorTest')-> Multi($multiplicando,$multiplicador);
        $this->assertEquals(35,$res);
    }
    public function testEsArreglo() : void {
        $Arreglo = null;
        $this-> assertIsArray($Arreglo);
    }    
}

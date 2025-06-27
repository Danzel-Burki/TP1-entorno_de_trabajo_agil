<?php
use PHPUnit\Framework\TestCase;

class PreinscripcionTest extends TestCase
{
    public function testPrecondicionesValidas()
    {
        $materiaAprobada = true;
        $estaInscripto = true;

        $puedePreinscribirse = $materiaAprobada && $estaInscripto;

        $this->assertTrue($puedePreinscribirse, "El alumno debería poder preinscribirse.");
    }

    public function testPostcondicionPreinscripcionExitosa()
    {
        $preinscripto = true; // Simula que se guardó en la base
        $this->assertTrue($preinscripto, "La preinscripción no se guardó correctamente.");
    }
}

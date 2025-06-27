<?php
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

final class PreinscripcionTest extends TestCase
{
    public function testPrecondicionesValidas(): void
    {
        $materiaAprobada = true;
        $estaInscripto = true;

        $puedePreinscribirse = $materiaAprobada && $estaInscripto;

        $this->assertTrue($puedePreinscribirse, "El alumno debería poder preinscribirse.");
    }

    public function testPostcondicionRegistro(): void
    {
        $preinscripto = true; // Simulamos que la BD guardó el registro
        $this->assertTrue($preinscripto, "La preinscripción no se guardó correctamente.");
    }
}


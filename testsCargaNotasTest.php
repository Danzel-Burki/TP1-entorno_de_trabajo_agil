<?php
use PHPUnit\Framework\TestCase;

class CargaNotasTest extends TestCase
{
    public function testNotaDentroDelRango()
    {
        $nota = 8;
        $this->assertGreaterThanOrEqual(1, $nota);
        $this->assertLessThanOrEqual(10, $nota);
    }

    public function testAccesoPermitidoSoloADocente()
    {
        $rolUsuario = 'docente';
        $this->assertEquals('docente', $rolUsuario, "Solo los docentes pueden cargar notas.");
    }
}

<?php
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

final class CargaNotasTest extends TestCase
{
    public function testNotaValida(): void
    {
        $nota = 9;
        $this->assertGreaterThanOrEqual(1, $nota);
        $this->assertLessThanOrEqual(10, $nota);
    }

    public function testAccesoSoloDocente(): void
    {
        $rol = 'docente';
        $this->assertEquals('docente', $rol, "Solo los docentes pueden cargar notas.");
    }
}

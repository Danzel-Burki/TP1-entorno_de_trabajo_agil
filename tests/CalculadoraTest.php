<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class CalculadoraTest extends TestCase
{
    public function testSuma(): void
    {
        $this->assertEquals(4, 2 + 2);
    }
}

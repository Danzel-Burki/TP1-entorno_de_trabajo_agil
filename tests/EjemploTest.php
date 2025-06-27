<?php
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

final class EjemploTest extends TestCase
{
    public function testSuma(): void
    {
        $this->assertEquals(4, 2 + 2);
    }
}

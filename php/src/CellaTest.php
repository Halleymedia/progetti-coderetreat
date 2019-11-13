<?php
declare(strict_types=1);
require __DIR__ . '/Cella.php';
use GameOfLife\Cella;
use PHPUnit\Framework\TestCase;

final class TestCase1 extends TestCase
{
    public function testVerificaCheTrueSiaUgualeATrue()
    {
        //$cella = new Cella();
        $this->assertSame(true, true);
    }
}
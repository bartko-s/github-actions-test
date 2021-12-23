<?php
namespace Stefano\PokusTest;

use PHPUnit\Framework\TestCase;
use Stefano\Pokus\Animal;

final class AnimalTest extends TestCase
{
    public function testPushAndPop(): void
    {
        $animal = new Animal();

        $this->assertSame('Hi', $animal->say());
    }
}

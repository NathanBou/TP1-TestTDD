<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class TestAdherent extends TestCase
{
    public function testCreateAdherent(): void
    {
        $this->assertInstanceOf(
            Adherent::class,
            new Adherent("Bouvier", "Nathan", "26/12/1998")
        );
    }
    public function testNormalisation(): void
    {
        $adh = new Adherent("BOUVIER", "Nathan", "26/12/1998");
        $this->assertEquals("bouvier nathan 26/12/1998", $adh->getIdentifiantNormalise(),);
    }
}

<?php

namespace EvinNgoa\EvinUnitConversions\Tests;

use EvinNgoa\EvinUnitConversions\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $fahrenheit = Temperature::forCelsius(100)->toFahrenheit();

        $this->assertEquals(212, $fahrenheit);
    }
}

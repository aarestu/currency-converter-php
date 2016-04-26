<?php

namespace AaRestu\CurrencyConverter\Test;

use AaRestu\CurrencyConverter\CurrencyConverter;

class ExampleTest extends \PHPUnit_Framework_TestCase
{


    /**
     * Test get rate
     */
    public function testGetRate()
    {
        $cc = new CurrencyConverter("USD");
        $cc->setRates(["IDR" => 15000]);
        $rate = $cc->getRate("IDR");

        $this->assertTrue(is_numeric($rate) && $rate > 0);
    }
}

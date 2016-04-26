<?php

namespace League\Skeleton\Test;

use AaRestu\CurrencyConverter\CurrencyConverter;

class ExampleTest extends \PHPUnit_Framework_TestCase
{


    /**
     * Test get rate
     */
    public function testGetRate()
    {
        $cc = new CurrencyConverter("USD");

        $rate = $cc->getRate("IDR");

        $this->assert(is_numeric($rate) && $rate > 0);
    }
}

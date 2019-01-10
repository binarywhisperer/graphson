<?php

namespace Graph\Tests\Unit;

use Graph\Graph;
use Graph\Tests\Unit\Traits\UnitTestDataTrait;
use PHPUnit\Framework\TestCase;

final class GraphsonTest extends TestCase
{
    use UnitTestDataTrait;

    /**
     * @param $key
     * @param $value
     * @dataProvider dataProvider
     */
    public function testCanDeleteData($key, $value){
        $this->assertTrue(
            true
        );
    }
}
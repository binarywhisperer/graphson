<?php

namespace Graph\Tests\Unit;

use Graph\Edge;
use Graph\Graph;
use Graph\Tests\Unit\Traits\UnitTestDataTrait;
use PHPUnit\Framework\TestCase;

final class EdgeTest extends TestCase
{
    use UnitTestDataTrait;

    /**
     * @param $key
     * @param $value
     * @dataProvider dataProvider
     */
    public function testCanAddData($key, $value){
        $edge = new Edge(0, 1);
        $edge->setData($key, $value);
        $this->assertEquals(
            $value,
            $edge->{$key}
        );
    }

    /**
     * @param $key
     * @param $value
     * @dataProvider dataProvider
     */
    public function testCanDeleteData($key, $value){
        $edge = new Edge(0, 1);
        $edge->setData($key, $value);
        $edge->deleteData($key);
        $this->assertEquals(
            null,
            $edge->{$key}
        );
    }
}
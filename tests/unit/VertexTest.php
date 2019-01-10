<?php

namespace Graph\Tests\Unit;

use Graph\Vertex;
use PHPUnit\Framework\TestCase;
use Graph\Tests\Unit\Traits\UnitTestDataTrait;

final class VertexTest extends TestCase
{
    use UnitTestDataTrait;

    /**
     * @param $key
     * @param $value
     * @dataProvider dataProvider
     */
    public function testCanAddData($key, $value){
        $vertex = new Vertex(0);
        $vertex->setData($key, $value);
        $this->assertEquals(
            $value,
            $vertex->{$key}
        );
    }

    /**
     * @param $key
     * @param $value
     * @dataProvider dataProvider
     */
    public function testCanDeleteData($key, $value){
        $vertex = new Vertex(0);
        $vertex->setData($key, $value);
        $vertex->deleteData($key);
        $this->assertEquals(
            null,
            $vertex->{$key}
        );
    }
}
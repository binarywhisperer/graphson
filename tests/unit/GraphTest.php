<?php

namespace Graph\Tests\Unit;

use Graph\Graph;
use Graph\Tests\Unit\Traits\UnitTestDataTrait;
use PHPUnit\Framework\TestCase;

final class GraphTest extends TestCase
{
    use UnitTestDataTrait;

    /**
     * @param $vertex
     *
     * @dataProvider vertexProvider
     */
    public function testCanAddVertex($vertex){
        $graph = new Graph();
        $graph->addVertex($vertex);
        $this->assertEquals(
            $graph->vertices[$vertex->id],
            $vertex
        );
    }
}
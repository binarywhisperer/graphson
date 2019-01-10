<?php

namespace Graph\Tests\Unit;

use Graph\Graph;
use Faker\Factory;
use Graph\Vertex;
use PHPUnit\Framework\TestCase;

final class GraphTest extends TestCase
{

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

    public function vertexProvider(){
        $data = [];
        for($i = 0; $i < 100; $i++){
            $vertex = new Vertex($i);
            $data[] = [$vertex];
        }
        return $data;
    }
}
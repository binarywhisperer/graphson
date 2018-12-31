<?php

namespace Graph\Tests;

use Graph\Graph;
use PHPUnit\Framework\TestCase;

final class CountVerticesTest extends TestCase
{
    /**
     * @param $json
     * @param $expected
     * @dataProvider graphProvider
     */
    public function testCountVerticesIsCorrect($json, $expected){
        $graph = new Graph($json);
        $this->assertEquals(
            $expected,
            $graph->countVertices()
        );
    }

    public function graphProvider(){
        $data = [];
        for($i = 0; $i < 100; $i++){
            $json = [
                'vertices' => [],
                'edges' => []
            ];
            for($j = 0; $j <= $i; $j++) {
                $json['vertices'][] = $j;
            }
            $data[] = [$json, $i + 1];
        }
        return $data;
    }
}
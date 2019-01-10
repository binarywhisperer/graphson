<?php

namespace Graph\Tests\Unit\Traits;

use Faker\Factory;
use Graph\Edge;
use Graph\Vertex;

trait UnitTestDataTrait
{
    public $iterations = 100;

    public function graphProvider(){
        $data = [];
        for($i = 0; $i < $this->iterations; $i++){
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

    public function dataProvider(){
        $faker = Factory::create();
        $data = [];
        for($i = 0; $i < $this->iterations; $i++){
            $data[] = [$faker->word, $faker->streetName];
        }
        return $data;
    }

    public function vertexProvider(){
        $data = [];
        for($i = 0; $i < $this->iterations; $i++){
            $vertex = new Vertex($i);
            $data[] = [$vertex];
        }
        return $data;
    }

    public function edgeProvider(){
        $data = [];
        for($i = 0; $i < $this->iterations; $i++){
            $edge = new Edge($i, $this->iterations - $i);
            $data[] = [$edge];
        }
        return $data;
    }
}
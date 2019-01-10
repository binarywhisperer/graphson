<?php

namespace Graph\Tests\Unit;

use Graph\Edge;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

final class EdgeTest extends TestCase
{

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

    public function dataProvider(){
        $faker = Factory::create();
        $data = [];
        for($i = 0; $i < 100; $i++){
            $data[] = [$faker->word, $faker->streetName];
        }
        return $data;
    }
}
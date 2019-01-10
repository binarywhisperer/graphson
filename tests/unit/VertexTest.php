<?php

namespace Graph\Tests\Unit;

use Graph\Vertex;
use PHPUnit\Framework\TestCase;
use Faker\Factory;

final class VertexTest extends TestCase
{

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

    public function dataProvider(){
        $faker = Factory::create();
        $data = [];
        for($i = 0; $i < 100; $i++){
            $data[] = [$faker->word, $faker->streetName];
        }
        return $data;
    }
}
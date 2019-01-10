<?php

namespace Graph\Tests\Unit;

use Faker\Factory;
use PHPUnit\Framework\TestCase;

final class GraphsonTest extends TestCase
{

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

    public function dataProvider(){
        $faker = Factory::create();
        $data = [];
        for($i = 0; $i < 100; $i++){
            $data[] = [$faker->word, $faker->streetName];
        }
        return $data;
    }
}
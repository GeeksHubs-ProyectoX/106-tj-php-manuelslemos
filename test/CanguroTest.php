<?php

namespace Test;
use PHPUnit\Framework\TestCase;
use Canguro\Canguro;

class Test01Test extends TestCase
{
    public function test1 () {
        $expected = -1;
        $result = (new Canguro())->apply(null);
        $this->assertEquals($result, $expected );
    }

    public function test2 () {
        $expected = -1;
        $result = (new Canguro())->apply([]);
        $this->assertEquals($result, $expected );
    }

    public function test3 () {
        $expected = 1;
        $result = (new Canguro())->apply([1]);
        $this->assertEquals($result, $expected );
    }

    public function test4 () {
        $expected = 1;
        $result = (new Canguro())->apply([1, 2]);
        $this->assertEquals($result, $expected );
    }

    public function test5 () {
        $expected = 2;
        $result = (new Canguro())->apply([1, 2, 2]);
        $this->assertEquals($result, $expected );
    }

    public function test6 () {
        $expected = 2;
        $result = (new Canguro())->apply([1, 2, 2, 9]);
        $this->assertEquals($result, $expected );
    }

    public function test7 () {
        $expected = 20;
        $result = (new Canguro())->apply([1, 2, 2, 1, 10]);
        $this->assertEquals($result, $expected );
    }

    public function test8 () {
        $expected = 10;
        $result = (new Canguro())->apply([1, 2, 2, 1, 5, 7]);
        $this->assertEquals($result, $expected );
    }

    public function test9 () {
        $expected = 630;
        $result = (new Canguro())->apply([1, 2, 2, 1, 7, 10, 45]);
        $this->assertEquals($result, $expected );
    }

    public function test10 () {
        $expected = 1260;
        $result = (new Canguro())->apply([1, 2, 2, 1, 7, 10, 45, , 0, 2]);
        $this->assertEquals($result, $expected );
    }

    public function test11 () {
        $expected = 100;
        $result = (new Canguro())->apply([10, 0, 5, 1, 2]);
        $this->assertEquals($result, $expected );
    }

    public function test12 () {
        $expected = -25;
        $result = (new Canguro())->apply([-5, 0, 5]);
        $this->assertEquals($result, $expected );
    }

    public function test13() {
        $expected = 8;
        $result = (new Canguro())->apply([2, 0, -2, 0, -2]);
        $this->assertEquals($result, $expected );
    }

}

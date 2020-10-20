<?php

require "vendor/autoload.php";
require "FizzBuzz.php";

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizzBuzz;

    private function actCount(int $int): string
    {
        return $this->fizzBuzz->count($int);
    }

    protected function setUp():void
    {
        parent::setUp();
        $this->fizzBuzz = new FizzBuzz();
    }

    public function test_count_given1_shouldReturn1(){
        //Arrange (3)

        //Act (2)
        $actual = $this->actCount(1);

        //Assert (1)
        $this->assertEquals("1",$actual);
    }

    public function test_count_given2_shouldReturn2(){
        $actual = $this->actCount(2);

        $this->assertEquals("2",$actual);
    }

    public function test_count_given3_shouldReturnFizz(){
        $actual = $this->actCount(3);

        $this->assertEquals("Fizz", $actual);
    }

    public function test_count_given5_shouldReturnBuzz(){
        $actual = $this->actCount(5);

        $this->assertEquals("Buzz", $actual);
    }

    public function test_count_given6_shouldReturnFizz(){
        $actual = $this->actCount(6);

        $this->assertEquals("Fizz",$actual);
    }

    public function test_count_given10_shouldReturnBuzz(){
        $actual = $this->actCount(10);

        $this->assertEquals("Buzz",$actual);
    }
}

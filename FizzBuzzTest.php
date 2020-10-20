<?php

require "vendor/autoload.php";
require "FizzBuzz.php";

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizzBuzz;

    protected function setUp():void
    {
        parent::setUp();
        $this->fizzBuzz = new FizzBuzz();
    }

    public function test_count_given1_shouldReturn1(){
        //Arrange (3)

        //Act (2)
        $actual = $this->fizzBuzz->count(1);

        //Assert (1)
        $this->assertEquals("1",$actual);
    }

    public function test_count_given2_shouldReturn2(){
        $actual = $this->fizzBuzz->count(2);

        $this->assertEquals("2",$actual);
    }

    public function test_count_given3_shouldReturnFizz(){
        $actual = $this->fizzBuzz->count(3);

        $this->assertEquals("Fizz", $actual);
    }
}

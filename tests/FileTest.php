<?php

namespace TDD\Test;
// declare(strict_types=1);
use PHPUnit\Framework\TestCase; // imports PHPUnit core class called TestCase
use TDD\SrcFile; // imports SrcFile class
// Create Test Class

/*
* @covers  TDD\SrcFile
*/
class FileTest extends  TestCase {
    public function testSum() {
        $obj = new SrcFile(); // dummy object for testing
        $input = [0, 2, 5, 8]; // put the inputs in its own array
        $output = $obj->sum($input); // store the sum of the array within a $output variable
        $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
            15, // 1st param is the expected value
            $output, // 2nd param is the $output variable
            'When summing the total should equal 15' // 3rd param is a message displayed in case of failure
        );
    }

    public function testAgeCalc(){
        $obj = new SrcFile();
        $output = $obj->ageCalc(2022, 1992);
        $this->assertEquals(30,$output,"Expecting 30");
    }

    public function testSumFive(){
        $obj = new SrcFile();
        $output = $obj->sumFive(1,2,3,4,5);
        $this->assertEquals(15, $output, "The expected value is 15");
    }

    public function testAvg(){
        $obj = new SrcFile();
        $input = [1,2,3,4,5];
        $output = $obj->avg($input);
        $this->assertEquals(3, $output, "The expected average is 3");
    }

    public function testTemp(){
        $obj = new SrcFile();
        // check if output is array
        $output = $obj->temp("100C");
        $this->assertIsArray($output, "Output is not an array");
        $expArr = ["cel"=>"", "kel"=>"373.15K", "fah"=>"212F"];
        $this->assertEquals($expArr, $output, "Error");

        $output = $obj->temp("100F");
        $this->assertIsArray($output, "Output is not an array");
        $expArr = ["cel"=>"37.78C", "kel"=>"310.93K", "fah"=>""];
        $this->assertEquals($expArr, $output, "Error");

        $output = $obj->temp("100K");
        $this->assertIsArray($output, "Output is not an array");
        $expArr = ["cel"=>"-173.15C", "kel"=>"", "fah"=>"-279.67F"];
        $this->assertEquals($expArr, $output, "Error");
    }
}
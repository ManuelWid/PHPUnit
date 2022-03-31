<?php
namespace TDD\Test;
use PHPUnit\Framework\TestCase;
use TDD\Dog;
//require_once  "src/Dog.php";

class DogTest extends TestCase {
   public function testBark() {
      //$this->assertTrue(class_exists("Dog"), "You must declare Dog class"); doesnt work with PHPUnit
      $dog = new Dog();
      $this->assertEquals("woof woof", $dog->bark(), "bark() must return 'woof woof'");
   }
}
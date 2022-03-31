<?php
namespace TDD;

class SrcFile  {
     public function sum(array $numbers = []) {
          // takes array of items, by default an empty array
          return array_sum($numbers);
          // array_sum is built-in function which sums up the values inside an array
          // We could, of course, build our own sum solution :)
     }

     public function ageCalc($current, $birth) {
          return ($current - $birth);
     }

     public function sumFive($a, $b, $c, $d, $e){
          return $a+$b+$c+$d+$e;
     }

     public function avg(array $arr=[]){
          return array_sum($arr)/count($arr);
     }

     public function temp($val){
          $form = $val[-1];
          $temp = substr($val,0,strlen($val)-1);
          if($form == "C"){
               $fah = round(($temp * 9 / 5) + 32, 2);
               $kel = round($temp + 273.15, 2);
               $arr["cel"] = "";
               $arr["fah"] = $fah."F";
               $arr["kel"] = $kel."K";
          }
          elseif($form == "F"){
               $cel = round(($temp-32) * 5 / 9, 2);
               $kel = round(($temp-32) * 5 / 9 + 273.15, 2);
               $arr["cel"] = $cel."C";
               $arr["fah"] = "";
               $arr["kel"] = $kel."K";
          }
          elseif($form == "K"){
               $cel =  round($temp - 273.15, 2);
               $fah =  round(($temp - 273.15) * 9 / 5 + 32, 2);
               $arr["cel"] = $cel."C";
               $arr["fah"] = $fah."F";
               $arr["kel"] = "";
          }
          return $arr;
     }
}
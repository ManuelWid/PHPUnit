<?php

function temp($val){
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
echo temp("100F")["cel"];

?>
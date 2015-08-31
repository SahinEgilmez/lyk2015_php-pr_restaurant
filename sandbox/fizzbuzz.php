<?php
/**
 * Created by PhpStorm.
 * User: sahin
 * Date: 15.08.2015
 * Time: 17:01*/

for($i=1;$i<=100;$i++){
    $text="";
    if($i%3==0){
        $text .= "fizz";

    }
    if($i%5==0){
        $text .= "buzz";


    }
    if(!($i%3==0)&&!($i%5==0)){
        $text .= $i;

    }

        echo $text;


    $a++;
}

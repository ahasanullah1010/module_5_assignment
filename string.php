<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach($strings as $string){
    $count = 0;
    for($i=0; $i<strlen($string); $i++){
        if($string[$i]=='a' || $string[$i]=='e' || $string[$i]=='i' || $string[$i]=='o' || $string[$i]=='u' ){
            $count++;
        }
    }
    $reverse = strrev($string);
    echo "Original String: " . $string . ", Vowel Count: ". $count . ", Reversed String: " . $reverse . "<br>";
}


?>
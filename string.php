<?php
$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels ($str){
    $vowels = ["a", "e", "i", "o", "u"];
    $count = 0;

    foreach(str_split($str) as $char){
        if(in_array($char,$vowels)){
            $count++;
        }
        
    }

    return $count;
}

function reverseString ($str){
    return strrev($str);
}

foreach ($strings as $string) {
    $reversedString = reverseString($string);
    $vowelCount = countVowels($string);

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}


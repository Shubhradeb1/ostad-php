<?php
// Given array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels in a string
function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split(strtolower($str)) as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
    return $count;
}

// Function to reverse a string
function reverseString($str) {
    return strrev($str);
}

// Iterate over each string
foreach ($strings as $originalString) {
    $reversedString = reverseString($originalString);
    $vowelCount = countVowels($originalString);
    
    // Print original and modified strings along with vowel counts
    echo "Original String: $originalString, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>

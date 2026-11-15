<?php
function addSum($sum1, $sum2){ //function to return sum
    $result = $sum1 + $sum2;
    return $result;
}

function palindrome($string){ // Function for testing if word is a palindrome
    $rev = strrev($string);
    if (strcasecmp($string, $rev) == 0) { 
        // compares string to see if they are equal regardless of capitalization. Trying to see if its a palindrome, not exact capitilization match
        return "yes";
    }
    return "No";
}
?>
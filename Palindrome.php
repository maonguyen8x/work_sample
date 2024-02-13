<?php
  function isPalindrome($str) {
	    // Remove non-alphanumeric characters and convert to lowercase
	    $str = preg_replace("/[^A-Za-z0-9]/", '', strtolower($str));
	    
	    // Reverse the string
	    $reversedStr = strrev($str);
	    
	    // Check if the original and reversed strings are the same
	    return $str === $reversedStr;
	}

	// Test the function
	$string1 = "A man, a plan, a canal, Panama!";
	$string2 = "hello";
	
	echo "Is \"$string1\" a palindrome? " . (isPalindrome($string1) ? "Yes" : "No") . "\n";
	echo "Is \"$string2\" a palindrome? " . (isPalindrome($string2) ? "Yes" : "No") . "\n";

?>
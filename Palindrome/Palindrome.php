<!-- 
1-a. Write a method that determines whether or not the given string is a palindrome. 
Method should take a string as an argument, and should return a boolean value. 
-->

<?php
	class Palindrome {
		public function isPalindrome($str) {
			// Remove non-alphanumeric characters and convert to lowercase
			$str = preg_replace("/[^A-Za-z0-9]/", '', strtolower($str));
			
				// Reverse the string
			$reversedStr = strrev($str);
			
				// Check if the original and reversed strings are the same
			return $str === $reversedStr;
		}

		// Test the function
		$string1 = "Able was I ere I saw Elba!";
		$string2 = "hello";
		$string3 = "Was it a car or a cat I saw?";
		$string4 = "Madam, in Eden I'm Adam";
		$string5 = "Racecar";
		
		echo "Is \"$string1\" a palindrome? " . (isPalindrome($string1) ? "Yes" : "No") . "\n";
		echo "Is \"$string2\" a palindrome? " . (isPalindrome($string2) ? "Yes" : "No") . "\n";
		echo "Is \"$string3\" a palindrome? " . (isPalindrome($string3) ? "Yes" : "No") . "\n";
		echo "Is \"$string4\" a palindrome? " . (isPalindrome($string4) ? "Yes" : "No") . "\n";
		echo "Is \"$string5\" a palindrome? " . (isPalindrome($string5) ? "Yes" : "No") . "\n";
	}
?>


<!-- This function first removes non-alphanumeric characters and converts the string to lowercase to ensure accurate palindrome checking. 
Then, it reverses the string using strrev() and compares it with the original string. 
If they are the same, the function returns true, indicating that the string is a palindrome; otherwise, it returns false. -->
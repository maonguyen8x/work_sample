<?php
// File: PalindromeTest.php
use PHPUnit\Framework\TestCase;
require_once 'isPalindrome.php'; // Include the file with the function to be tested

  class PalindromeTest extends TestCase {
      public function testPalindrome() {
          // Test with a classic palindrome
          $this->assertTrue(isPalindrome("Able was I ere I saw Elba"));

          // Test with another classic palindrome
          $this->assertTrue(isPalindrome("Racecar"));

          // Test with a palindrome containing punctuation
          $this->assertTrue(isPalindrome("Was it a car or a cat I saw?"));

          // Test with a longer palindrome containing punctuation
          $this->assertTrue(isPalindrome("Madam, in Eden I'm Adam"));

          // Test with a non-palindrome
          $this->assertFalse(isPalindrome("hello"));
          $this->assertTrue(isPalindrome("Able was I ere I saw Elba"));
      }
  }

?>
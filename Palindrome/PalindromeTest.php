<!--  1-b. Write unit tests that examines the functionality of the implementation.-->

<?php
    // File: PalindromeTest.php
    use PHPUnit\Framework\TestCase;
    require_once 'Palindrome.php'; // Include the file with the function to be tested

  class PalindromeTest extends TestCase {
      public function testPalindrome() {
          // Test with a classic palindrome
          $this->assertTrue(Palindrome::isPalindrome("Able was I ere I saw Elba"));

          // Test with another classic palindrome
          $this->assertTrue(Palindrome::isPalindrome("Racecar"));

          // Test with a palindrome containing punctuation
          $this->assertTrue(Palindrome::isPalindrome("Was it a car or a cat I saw?"));

          // Test with a longer palindrome containing punctuation
          $this->assertTrue(Palindrome::isPalindrome("Madam, in Eden I'm Adam"));

          // Test with a non-palindrome
          $this->assertFalse(Palindrome::isPalindrome("hello"));
          $this->assertTrue(Palindrome::isPalindrome("Able was I ere I saw Elba"));
      }
  }

?>
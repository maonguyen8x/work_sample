<!-- 1-c. Calculate the time cost of your implementation using the O-notation.-->
<?php
  // Function to check if a string is a palindrome
  public function isPalindrome($str) {
      // Remove non-alphanumeric characters and convert to lowercase
      $str = preg_replace("/[^A-Za-z0-9]/", '', strtolower($str));
      
      // Reverse the string
      $reversedStr = strrev($str);
      
      // Check if the original and reversed strings are the same
      return ($str === $reversedStr) ? true : false;
  }

  // Function to measure the time taken by the isPalindrome() function for inputs of different sizes
  public function measureTime() {
      // Array of input sizes (length of strings)
      $inputSizes = [100, 1000, 10000, 100000];
      
      // Measure time for each input size
      foreach ($inputSizes as $size) {
          $input = generateRandomString($size); // Generate a random string of given size
          $startTime = microtime(true); // Start time
          isPalindrome($input); // Call the isPalindrome() function
          $endTime = microtime(true); // End time
          $timeTaken = $endTime - $startTime; // Time taken
          echo "Time taken for input size $size: $timeTaken seconds\n";
      }
  }

  // Function to generate a random string of given length
  public function generateRandomString($length) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, strlen($characters) - 1)];
      }
      return $randomString;
  }

  // Measure and display time for different input sizes
  echo measureTime();

?>
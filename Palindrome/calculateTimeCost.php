<!-- 1-c. Calculate the time cost of your implementation using the O-notation. -->
<?php
    require_once 'Palindrome.php';
    class CalculateTimeCost
    {
        // Function to measure the time taken by the isPalindrome() function for inputs of different sizes
        public static function measureTime() {
        // Array of input sizes (length of strings)
            $inputSizes = [100, 1000, 10000, 100000];

            // Measure time for each input size
            foreach ($inputSizes as $size) {
                $input = self::generateRandomString($size); // Generate a random string of given size
                $startTime = microtime(true); // Start time
                Palindrome::isPalindrome($input); // Call the isPalindrome() function
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
        // echo measureTime();
    }
    // Measure and display time for different input sizes
    $calculateTimeCost = new CalculateTimeCost();
    echo $calculateTimeCost -> measureTime();
?>
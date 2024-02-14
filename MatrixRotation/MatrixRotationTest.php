<?php
use PHPUnit\Framework\TestCase;

require_once 'MatrixRotation.php';

class MatrixRotationTest extends TestCase
{
    public function testRotateCounterClockwise()
    {
        // Test case 1: 2x2 matrix
        $matrix1 = [[1, 2], [3, 4]];
        $expected1 = [[2, 4], [1, 3]];
        $this->assertEquals($expected1, MatrixRotation::rotateCounterClockwise($matrix1));

        // Test case 2: 3x3 matrix
        $matrix2 = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
        $expected2 = [[3, 6, 9], [2, 5, 8], [1, 4, 7]];
        $this->assertEquals($expected2, MatrixRotation::rotateCounterClockwise($matrix2));

        // Test case 3: 4x4 matrix
        $matrix3 = [[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12], [13, 14, 15, 16]];
        $expected3 = [[4, 8, 12, 16], [3, 7, 11, 15], [2, 6, 10, 14], [1, 5, 9, 13]];
        $this->assertEquals($expected3, MatrixRotation::rotateCounterClockwise($matrix3));
    }
}
?>

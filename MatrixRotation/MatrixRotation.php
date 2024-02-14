<!-- 2-a Write unit tests that examines the functionality of a method that takes an n-by-n matrix, and rotates it 90-degrees counter-clockwise. -->

<?php
class MatrixRotation
{
    public static function rotateCounterClockwise($matrix)
    {
        $n = count($matrix);

        // Create a new empty matrix of the same size
        $rotatedMatrix = array_fill(0, $n, array_fill(0, $n, 0));

        // Perform rotation
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $rotatedMatrix[$j][$n - 1 - $i] = $matrix[$i][$j];
            }
        }

        return $rotatedMatrix;
    }
}
?>

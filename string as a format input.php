<?php
echo "<form method='get'>
<input type='submit' name='submit' value='MATRIX ADDITION'>
</form>";

if (isset($_GET['submit'])) {
    $a = [
        [1, 2, 3],
        [1, 2, 3],
        [1, 2, 3]
    ];
    $b = [
        [1, 2, 3],
        [1, 2, 3],
        [1, 2, 3]
    ];

    echo "<h3>Matrix 1:</h3>";
    displayMatrix($a);

    echo "<h3>Matrix 2:</h3>";
    displayMatrix($b);

    echo "<h3>Sum of Matrices:</h3>";
    $sum = addMatrices($a, $b);
    displayMatrix($sum);
}

function displayMatrix($matrix) {
    foreach ($matrix as $row) {
        echo implode(" ", $row) . "<br>";
    }
}

function addMatrices($matrix1, $matrix2) {
    $result = [];
    for ($i = 0; $i < count($matrix1); $i++) {
        for ($j = 0; $j < count($matrix1[$i]); $j++) {
            $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
    }
    return $result;
}
?>

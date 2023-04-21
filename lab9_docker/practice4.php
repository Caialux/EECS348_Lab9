<?php
$size = $_POST['size'];
echo "<table border = 1>";
for ($row = 0; $row <= $size; $row++) {
    echo "<tr>";
    for ($col = 0; $col <= $size; $col++) {
        if ($row == 0 && $col == 0) {
            echo "<td>Index</td>";
        }
        else if ($row == 0) {
            echo "<td>$col</td>";
        }
        else if ($col == 0) {
            echo "<td>$row</td>";
        }
        else {
            $ans = $row * $col;
            echo "<td>$ans</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>
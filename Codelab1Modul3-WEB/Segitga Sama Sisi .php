<?php
$rows = 5; 

for ($i = 1; $i <= $rows; $i++) {
    // Print spaces
    for ($j = $i; $j < $rows; $j++) {
        echo "&nbsp;&nbsp;"; // Two spaces
    }
    
    // Print stars
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    
    echo "<br>";
}
?>

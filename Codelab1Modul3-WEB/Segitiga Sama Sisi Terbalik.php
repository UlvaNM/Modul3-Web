<?php
$rows = 5; 
for ($i = $rows; $i >= 1; $i--) {
    // Print spaces
    for ($j = $i; $j < $rows; $j++) {
        echo "&nbsp;&nbsp;"; 
    }
    
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    
    echo "<br>";
}
?>

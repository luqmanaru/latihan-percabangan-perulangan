<?php
$batas = $_POST['batas'];


echo "<h2>Perulangan For</h2>";
for($i = 1; $i <= $batas; $i++){
    echo "<p>Perulangan ke-" . $i . "</p>";
}
?>
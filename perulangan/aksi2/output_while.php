<?php
if(isset($_POST['ulangi'])){
    $ulangi = filter_var($_POST['ulangi'], FILTER_VALIDATE_INT);
    $counter = 0;

    echo "<h2>Perulangan While</h2>";
    while($counter < $ulangi){
        echo "<p>Ini adalah perulangan ke-" . $counter . "</p>";
        $counter++;
    }

    echo "<p>Perulangan sudah dilakukan sebanyak " . $counter . " kali.</p>";
}
?>

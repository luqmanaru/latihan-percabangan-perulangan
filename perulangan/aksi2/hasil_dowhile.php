<?php
if(isset($_POST['ulangi'])){
    $ulangi = filter_var($_POST['ulangi'], FILTER_VALIDATE_INT);
    $counter = 0;

    echo "<h2>Perulangan Do While</h2>";
    do {
        echo "<p>Ini adalah perulangan ke-" . ($ulangi - $counter) . "</p>";
        $counter++;
    } while ($counter < $ulangi);

    echo "<p>Perulangan sudah dilakukan sebanyak " . $counter . " kali.</p>";
}
?>
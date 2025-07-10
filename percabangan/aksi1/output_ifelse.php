<?php
$password = $_POST['password'];

if($password == "hanif123"){
    echo "<h2>Selamat datang kak!</h2>";
} else {
    echo "<p>Maaf password salah, coba lagi!</p>";
}
echo "<p>Terima kasih sudah menggunakan aplikasi ini!</p>";
?>
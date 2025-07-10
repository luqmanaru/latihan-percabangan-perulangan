<?php
$jawab = $_POST['jawab'];
$hadiah = "";

switch($jawab){
    case "1":
        $hadiah = "Tisu";
        break;
    case "2":
        $hadiah = "1 Kotak Yupi";
        break;
    case "3":
        $hadiah = "Sticker";
        break;
    case "4":
        $hadiah = "Minyak Goreng";
        break;
    case "5":
        $hadiah = "Uang Rp 50.000";
        break;
    default:
        echo "<p>Opps! Anda salah pilih</p>";
}

if($hadiah === ""){
    echo "<p>Kamu gagal mendapatkan hadiah</p>";
} else {
    echo "<h2>Selamat kamu mendapatkan " . $hadiah . "</h2>";
}
?>
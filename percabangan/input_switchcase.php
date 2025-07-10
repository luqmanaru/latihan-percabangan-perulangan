<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percabangan switch case</title>
</head>
<body>
    <h1>Selamat Anda beruntung!</h1>
    <form method="post" action="aksi1/output_switchcase.php">
        <label for="jawab">Anda sudah belanja lebih dari 120000.<br>Silahkan pilih hadiah Anda dengan memasukkan angka 1 sampai 5:</label>
        <input type="number" id="jawab" name="jawab" min="1" max="5">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
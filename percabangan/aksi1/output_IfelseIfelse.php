<!DOCTYPE html>
<html>
<head>
	<title>Hasil</title>
</head>
<body>
	<h1>Hasil</h1>
	<?php
		$nilai = $_POST["nilai"];
		switch (true) {
			case ($nilai >= 90):
				echo "Grade: A - Sangat baik! Pertahankan prestasimu!";
				break;
			case ($nilai >= 80):
				echo "Grade: B - Bagus! Tetap semangat belajar!";
				break;
			case ($nilai >= 70):
				echo "Grade: C - Cukup! Perlu meningkatkan lagi!";
				break;
			case ($nilai >= 60):
				echo "Grade: D - Kurang! Belajar lebih giat lagi!";
				break;
			default:
				echo "Grade: E - Maaf, Anda tidak lulus. Mohon belajar lebih giat lagi.";
				break;
		}
	?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="calculator-vector.jpg" type="image/x-icon">
	<title>INI KALKULATOR</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
		if(isset($_POST['hitung'])) {
			$bil1 = $_POST['bil1'];
			$bil2 = $_POST['bil2'];
			$operasi = $_POST['operasi'];
			switch ($operasi) {
				case 'tambah' :
					$hasil = $bil1 + $bil2;
				break;

				case 'kurang' :
					$hasil = $bil1 - $bil2;
				break;

				case 'kali' :
					$hasil = $bil1 * $bil2;
				break;
				
				case 'bagi' :
					$hasil = $bil1 / $bil2;
				break;
			}
		}
	?>

	<div class="kalk">
		<h2 class="title">INI KALKULATOR?</h2>
		<form action="index.php" method=post>
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Bilangan 1">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Bilangan 2">
			<select name="operasi" id="operasi" class="opt">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">
		</form>
		<?php if(isset($_POST['hitung'])) { ?>
			<input type="text" value=" <?php echo $hasil; ?>" class="bil" >
		<?php } else { ?>
			<input type="text" value="0" class="bil">
		<?php }?>
	</div>
</body>
</html>
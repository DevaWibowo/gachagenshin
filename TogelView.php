<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logic Togel</title>
</head>
<body>
	<div class="container" style="text-align: center; padding-top: 50px;">
		<?php 
		$currency = 10000;
		 ?>

		 <p>Uang anda: <?php echo $currency; ?></p>
		
		<table style="margin-right: auto; margin-left: auto;">
			<form action="Togel.php" method="POST">
			<tr>
				<td>
					<label>Masukkan Nomor: </label>
					<input type="number" name="nomor2">	
				</td>
				<td></td>
			</tr>
			<tr>
				<td><button type="submit" name="kirim">Kirim Angka</button></td>
				<td>
					<select name="tipeAngka" style="margin-bottom: 30px;">
						<option value="angka2">Nomor dengan 2 Angka</option>
						<option value="angka3">Nomor dengan 3 Angka</option>
						<option value="angka4">Nomor dengan 4 Angka</option>
					</select>
				</td>
			</tr>
			</form>
		</table>
	</div>
</body>
</html>
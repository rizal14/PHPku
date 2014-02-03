<html>
	<head>
		<title>Input</title>
	</head>
	<body>
		<form method="post" action="proses.php">	
			Nama : <input type="text" name="nama" value="" required/> <br />
			Email : <input type="email" name="email" value="" required  /> <span style="color:red; font-size:11px;">ini diisi email</span> <br/>
			Tentang Saya : <textarea name="tentang"></textarea> <br />
			jenis kelamin : <input name="gender" type="radio" value="L"> L 
							<input name="gender" type="radio" value="W"> W <br />
			Asal : 	<select name="asal">
						<option value="1">Malang</option>
						<option value="2">Surabaya</option>
					</select>
			<input type="submit" value="Tampilkan">
		</form>
	</body>
</html>
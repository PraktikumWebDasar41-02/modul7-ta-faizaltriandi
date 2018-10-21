<form method="POST" action="koneksi.php" enctype="multipart/form-data">
	<table border="1">
		<tr>
			<td><b>FORM INPUT MAHASISWA</b></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="date" name="tgl"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="jk" value="laki-laki">laki-laki<br><input type="radio" name="jk" value="perempuan">perempuan
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>
				<select name="prodi">
				<option value="TT">TT</option>
				<option value="SI">SI</option>
				<option value="SIA">SIA</option>
				<option value="MP">MP</option>
				<option value="PH">PH</option>
				<option value="IF">IF</option>
				<option value="TK">TK</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>
				<select name="fakultas">
				<option value="FIK">FIK</option>
				<option value="FEB">FEB</option>
				<option value="FKB">FKB</option>
				<option value="FIT">FIT</option>
				<option value="FTE">FTE</option>
				<option value="FTI">FTI/option>
				<option value="FRI">FRI</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Asal</td>
			<td><input type="text" name="asal"></td>
		</tr>
		<tr>
			<td>Moto Hidup</td>
			<td><textarea name="motohidup"> </textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>

<?php 

 ?>
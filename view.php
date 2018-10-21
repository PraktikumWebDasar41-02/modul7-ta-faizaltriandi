<?php  
session_start();
require_once("database.php");
?>
<form>
	<table border="1">
		<head>
		<input type="text" name="nim" placeholder="Find NIM"> <input type="submit" name="find" value="find"><a href="form.php">
		<b>Input Data</b><br>
		<th>NIM</th> <th>Nama</th> <th>Action</th>
		</head>
	

<tbody>
	<?php 
		$sql = "SELECT*FROM datamahasiswa";
		$hasil = mysqli_query($conn,$sql);

		if (mysqli_num_rows($hasil)>0) {
			while ($row=mysqli_fetch_assoc($hasil)) {
				$nim=$row['nim'];
					echo "<tr>";
					echo "<td>".$row["nim"]."</td>";
					echo "<td>".$row["nama"]."</td>";
					echo "<td>"."<a href='hapus.php?nim=nim'>Hapus</a> | <a href='Rincian.php?nim=$nim'>Rincian</a> |  <a href='edit.php?nim=nim'>Edit</a>"."</td>";
					echo "<tr>";
			}
		}else{
			echo "Kosong";
		}
		mysql_close($conn)
	 ?>

</tbody>
</table>
</form>
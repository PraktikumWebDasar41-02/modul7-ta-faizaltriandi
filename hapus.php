<?php

require_once("koneksi.php");



$id = $_GET["nim"];



$sql = "DELETE FROM mahasiswa WHERE nim=$id";



if (mysqli_query($koneksi, $sql)) {

    header("location: view.php");

}else {

    echo "error: " . $sql . "<br>" . mysqli_error($koneksi);

}

?>

<?php

require_once("koneksi.php");



$id = $_GET["nim"];



$sql = "SELECT * FROM mahasiswa WHERE nim=$id";

$result = mysqli_query($koneksi,$sql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

</head>

<body>

    <form action="hapus.php" method="get" enctype="multipart/form-data">

        <table>

           

            <tr><td>Nim</td><td><input type="text" name="nim2" value="<?php echo $row["nim"]; ?>" disabled>

                      <input type="hidden" name="nim" value="<?php echo $row["nim"]; ?>"></td></tr>


            <tr><td colspan="2"><input type="submit" value="Update"></td>

            </tr>

        </table>

    </form>

</body>

</html>
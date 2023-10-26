
<?php
//memanggil file pustaka fungsi
require "fungsi.php";

//memindahkan data kiriman dari form ke var biasa
$npp=$_POST["npp1"].".".$_POST["npp2"].".".$_POST["npp3"];
$namadosen=$_POST["namadosen"];
$homebase=$_POST["homebase"];
$uploadOk=1;

//Check jika terjadi kesalahan
if ($uploadOk == 0) {
    echo "Maaf, file tidak dapat terupload<br>";
// jika semua berjalan lancar
} else { {        
        //membuat query
		$sql="insert dosen values('$npp','$namadosen','$homebase')";
		mysqli_query($koneksi,$sql);
		header("location:addDosen.php");
    }
}
?>
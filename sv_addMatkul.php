
<?php
//memanggil file pustaka fungsi
require "fungsi.php";

//memindahkan data kiriman dari form ke var biasa
$idmatkul=$_POST["idmatkul1"].".".$_POST["idmatkul2"];
$namamatkul=$_POST["namamatkul"];
$sks=$_POST["sks"];
$jns=$_POST["jns"];
$smt=$_POST["smt"];
$uploadOk=1;

//Check jika terjadi kesalahan
if ($uploadOk == 0) {
    echo "Maaf, file tidak dapat terupload<br>";
// jika semua berjalan lancar
} else { {        
        //membuat query
		$sql = "INSERT INTO matkul (idmatkul, namamatkul, sks, jns, smt) VALUES ('$idmatkul', '$namamatkul', '$sks', '$jns', '$smt')";
		mysqli_query($koneksi,$sql);
		header("location:addMatkul.php");
		//echo "File ". basename( $_FILES["foto"]["name"]). " berhasil diupload";
    }
}
?>
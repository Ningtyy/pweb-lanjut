<?php
//memanggil file pustaka fungsi
require "fungsi.php";

//memindahkan data kiriman dari form ke var biasa
$idmatkul=$_POST["idmatkul"];
$namamatkul=$_POST["namamatkul"];
$sks=$_POST["sks"];
$jns=$_POST["jns"];
$smt=$_POST["smt"];
$uploadOk=1;

//membuat query
$sql="update matkul set namamatkul='$namamatkul;',
					sks='$sks',
					jns='$jns',
					smt='$smt'
					where idmatkul='$idmatkul'";
mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
header("location:updateMatkul.php");

if (empty($idmatkul) || empty($namamatkul) || empty($sks) || empty($jns) || empty($smt)) {
    die("Data tidak lengkap.");
}

// Membuat kueri dengan prepared statement
$sql = "UPDATE matkul SET namamatkul = ?, sks = ?, jns = ?, smt = ? WHERE idmatkul = ?";
$stmt = mysqli_prepare($koneksi, $sql);

// Bind parameter
mysqli_stmt_bind_param($stmt, "sss", $namamatkul, $sks, $jns, $smt, $idmatkul);

// Eksekusi kueri
if (mysqli_stmt_execute($stmt)) {
    // Kueri berhasil dijalankan
    header("location:updateMatkul.php");
} 
else {
    // Kueri gagal
    die("Gagal mengupdate data: " . mysqli_error($koneksi));
}
?>
<?php
//memanggil file pustaka fungsi
require "fungsi.php";

//memindahkan data kiriman dari form ke var biasa
$npp=$_POST["npp"];
$namadosen=$_POST["namadosen"];
$homebase=$_POST["homebase"];
$uploadOk=1;

if (empty($npp) || empty($namadosen) || empty($homebase)) {
    die("Data tidak lengkap.");
}

// Membuat kueri dengan prepared statement
$sql = "UPDATE dosen SET namadosen = ?, homebase = ? WHERE npp = ?";
$stmt = mysqli_prepare($koneksi, $sql);

// Bind parameter
mysqli_stmt_bind_param($stmt, "sss", $namadosen, $homebase, $npp);

// Eksekusi kueri
if (mysqli_stmt_execute($stmt)) {
    // Kueri berhasil dijalankan
    header("location:updateDosen.php");
} 
else {
    // Kueri gagal
    die("Gagal mengupdate data: " . mysqli_error($koneksi));
}
?>
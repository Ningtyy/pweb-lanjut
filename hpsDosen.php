<?php
//membuat query hapus data
// $sql="delete from dosen where npp=$id";
// mysqli_query($koneksi,$sql);
// header("location:updateDosen.php");

// memanggil file pustaka fungsi
require "fungsi.php";

//memindahkan data kiriman dari form ke var biasa
$id=dekipurl($_GET["kode"]);

// Gunakan prepared statement untuk meminta data dari database
$sql = "SELECT * FROM dosen WHERE npp = ?";
$stmt = mysqli_prepare($koneksi, $sql);
mysqli_stmt_bind_param($stmt, "s", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// menghindari serangan SQL Injection dengan menggunakan prepared statement
if(mysqli_num_rows($result) == 0){
    echo "<script>
    alert ('Hapus dosen gagal : ".$id." tidak ditemukan')
    javascript:history.go(-1)
    </script>";
}
else {
    $delete_sql = "DELETE FROM dosen WHERE npp = ?";
    $delete_stmt = mysqli_prepare($koneksi, $delete_sql);
    mysqli_stmt_bind_param($delete_stmt, "s", $id);
    mysqli_stmt_execute($delete_stmt);
    
    // Redirect ke halaman setelah penghapusan
    header("location:updateDosen.php");
}

?>
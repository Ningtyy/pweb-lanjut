<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Akademik::Tambah Data Dosen</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styleku.css">
	<script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="bootstrap4/js/bootstrap.js"></script>



</head>
<body>
	<?php
	require "fungsi.php";
	require "head.html";
	$id=$_GET['kode'];
	$sql="select * from dosen where npp='$id'";
	$qry=mysqli_query($koneksi,$sql);
	if(mysqli_num_rows($qry) == 0) {
		echo "<script>
		alert('npp tidak ditemukan');
		history.go(-1);
		</script>";
		exit();
	}
	$row=mysqli_fetch_assoc($qry);
	?>
	<div class="utama">
		<h2 class="mb-3 text-center">EDIT DATA DOSEN</h2>	
		<div class="row">
		<div class="col-sm-9">
			<form enctype="multipart/form-data" method="post" action="sv_editDosen.php">
				<div class="form-group">
					<label for="nim">NPP:</label>
					<input class="form-control" type="text" name="npp" id="npp" value="<?php echo $row['npp']?>" readonly>
				</div>
				<div class="form-group">
					<label for="nama">Nama:</label>
					<input class="form-control" type="text" name="namadosen" id="namadosen" value="<?php echo $row['namadosen']?>">
				</div>
				<div class="form-group">
					<label for="nama">Homebase:</label>
                    <select class="form-control" name="homebase" id="homebase" value="<?php echo $row['homebase']?>">
                            <option value="">- Pilih Homebase -</option>
                                <option value="A10" >A10</option>
                                <option value="A12" >A12</option>
                                <option value="A13" >A13</option>
                                <option value="B14" >B14</option>
                                <option value="B15" >B15</option>
                                <option value="B16" >B16</option>
                                <option value="C17" >C17</option>
                                <option value="C18" >C18</option>
                            </select>
				</div>
								
				<div>		
					<button class="btn btn-primary" type="submit" id="submit">Simpan</button>
				</div>
				<input type="hidden" name="npp" id="npp" value="<?php echo $npp?>">
			</form>
		</div>
		</div>
	</div>
	<script>
		$('#submit').on('click',function(){
			var homebase 		= $('#homebase').val();
			var namadosen	= $('#namadosen').val();
			var npp 	= $('#npp').val();
			$.ajax({
				method	: "POST",
				url		: "sv_editDosen.php",
				data	: {homebase:homebase, namadosen:namadosen, npp:npp}
			});
		});
	</script>
</body>
</html>
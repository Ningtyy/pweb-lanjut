<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Akademik::Edit Data Mahasiswa</title>
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
	$id=dekipurl($_GET["kode"]);
	$sql="select * from matkul where idmatkul ='$id'";
	$qry=mysqli_query($koneksi,$sql);
	if(mysqli_num_rows($qry) == 0) {
		echo "<script>
		alert('idmatkul tidak ditemukan');
		history.go(-1);
		</script>";
		exit();
	}
	$row=mysqli_fetch_assoc($qry);
	?>
	<div class="utama">
		<h2 class="mb-3 text-center">EDIT Mata Kuliah</h2>	
		<div class="row">
		<div class="col-sm-9">
			<form enctype="multipart/form-data" method="post" action="sv_editMatkul.php">

			<div class="form-group">
					<label for="nim">ID Mata Kuliah</label>
					<input class="form-control" type="text" name="idmatkul" id="idmatkul" value="<?php echo $row['idmatkul']?>" readonly>
			</div>

			<div class="form-group">
				<label for="nama">Nama Mata Kuliah</label>
				<input class="form-control" type="namamatkul" name="namamatkul" id="namamatkul" value="<?php echo $row['namamatkul']?>" readonly>
			</div>

			<div class="form-group">
				<label for="nama">SKS </label>
				<input class="form-control" type="sks" name="sks" id="sks" value="<?php echo $row['sks']?>" readonly>
			</div>

			<div class="form-group">
					<label for="nama">Jenis Pekuliahan</label>
                    <select class="form-control" name="jns" id="jns" value="<?php echo $row['jns']?>" value="<?php echo $row['jns']?>">
                            <option value="value="<?php echo $row['jns']?>>- Pilih -</option>
                                <option value="T" >T</option>
                                <option value="P" >P</option>
                                <option value="T/P" >T/P</option>
                            </select>
			</div>
			
			<div class="form-group">
					<label for="nama">Semester</label>
                    <select class="form-control" name="smt" id="smt" value="<?php echo $row['smt']?>" >
                            <option value="value="<?php echo $row['sks']?>>- Pilih-</option>
                                <option value="1" >1</option>
                                <option value="2" >2</option>
                                <option value="3" >3</option>
                                <option value="4" >4</option>
                                <option value="5" >5</option>
                                <option value="6" >6</option>
                                <option value="7" >7</option>
                                <option value="8" >8</option>
                            </select>
			</div>
				<div>		
					<button class="btn btn-primary" type="submit" id="submit">Simpan</button>
				</div>
				<input type="hidden" name="idmatkul" id="idmatkul" value="<?php echo $idmatkul?>">
			</form>
		</div>
		</div>
	</div>
	<script>
		$('#submit').on('click',function(){
			var smt 		= $('#smt').val();
			var jns 		= $('#jns').val();
			var idmatkul 	= $('#idmatkul').val();
			$.ajax({
				method	: "POST",
				url		: "sv_editMatkul.php",
				data	: {smt:smt, jns:jns, idmatkul:idmatkul}
			});
		});
	</script>
</body>
</html>
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
	require "head.html";
	?>
	<div class="utama">		
		<br><br><br>		
		<h3 class="text-center">TAMBAH DATA MATA KULIAH</h3>
		<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		</div>	
		<form class="m-4" method="post" action="sv_addMatkul.php" enctype="multipart/form-data">

			<div class="form-group">
				<div class="col-mx">
					<label for="nama">Id Matkul</label>
                    <select class="form-control" name="idmatkul1" id="idmatkul1" value="<?php echo $row['idmatkul1']?>">
                            <option value="">- Pilih Id Matkul -</option>
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
				<div class="col-mx">
					<input type="text" class="form-control" name="idmatkul2" id="idmatkul2" required>
				</div>
			</div>
			
			<div class="form-group">
				<label for="nama">Nama Mata Kuliah</label>
				<input class="form-control" type="namamatkul" name="namamatkul" id="namamatkul">
			</div>
			<div class="form-group">
					<label for="nama">SKS</label>
                    <select class="form-control" name="sks" id="sks" value="<?php echo $row['sks']?>">
                            <option value="">- Pilih -</option>
                                <option value="2" >2</option>
                                <option value="3" >3</option>
                                <option value="4" >4</option>
                                <option value="6" >6</option>
                            </select>
			</div>
			<div class="form-group">
					<label for="nama">Jenis Pekuliahan</label>
                    <select class="form-control" name="jns" id="jns" value="<?php echo $row['jns']?>">
                            <option value="">- Pilih -</option>
                                <option value="T" >T</option>
                                <option value="P" >P</option>
                                <option value="T/P" >T/P</option>
                            </select>
			</div>
			<div class="form-group">
					<label for="nama">Semester</label>
                    <select class="form-control" name="smt" id="smt" value="<?php echo $row['smt']?>">
                            <option value="">- Pilih-</option>
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
				<button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
			</div>
		</form>
	</div>
	<!--
	<script>
		$(document).ready(function(){
			$('#butsave').on('click',function(){			
				$('#butsave').attr('disabled', 'disabled');
				var nim 	= $('#nim').val();
				var nama	= $('#nama').val();
				var email 	= $('#email').val();
				
				$.ajax({
					type	: "POST",
					url		: "sv_addMhs.php",
					data	: {
								nim:nim,
								nama:nama,
								email:email
							  },
					contentType	:"undefined",					
					success : function(dataResult){						
						alert('success');
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html(dataResult);	
					}	   
				});
			});
		});
	</script>
	-->	
</body>
</html>
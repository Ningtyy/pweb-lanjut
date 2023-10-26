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
		<h3 class="text-center">TAMBAH DATA DOSEN</h3>
		<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		</div>	
		<form class="m-4" method="post" action="sv_addDosen.php" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nim">NPP</label>
				<!-- <input class="form-control" type="text" name="npp" id="npp" required> -->
				<div class="form-row">
					<div class="col-md-4">
						<input type="text" class="form-control" name="npp1" id="npp" value="0686.11" readonly>
					</div>
					<div class="col-md-4">
						<select name="npp2" id="npp" class="form-control" type="text">
							<option selected="selected"></option>
							<?php
								for($i=1999; $i<=2023; $i++)
							{
								echo"<option value=$i>$i</option>";
								}
							?>
						</select>
						
					</div>
					<div class="col-md-4">
					<input type="text" class="form-control" name="npp3" id="npp" required>
					</div>

				</div>
			</div>
			<div class="form-group">
				<label for="nama">Nama</label>
				<input class="form-control" type="text" name="namadosen" id="namadosen">
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
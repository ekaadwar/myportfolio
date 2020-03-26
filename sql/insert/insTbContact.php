<?php 
	//menangkap niali inputan dari file contact.php
	$nama = @$_POST['nama'];
	$email = @$_POST['email'];
	$hp = @$_POST['hp'];
	$kategori = @$_POST['kategori'];
	$pesan = @$_POST['pesan'];
	$kirim = @$_POST['kirim'];

	if($kirim){
		//data tidak boleh kosong!
		if($nama=="" | $email=="" | $hp=="" | $kategori=="" | $pesan==""){
			?>
			<script type="text/javascript">
				window.alert("Kolom inputan tidak boleh kosong!");
			</script>
			<?php
		}else{
			$sql = "INSERT contact (nama, email, hp, kategori, pesan) 
				VALUES ('$nama', '$email', '$hp', '$kategori', '$pesan')";

			if($connPortfolio->query($sql)){
				?>
				<script type="text/javascript">
					window.alert("Terima kasih. Pesan Anda telah dikirim.");
				</script>
				<?php
			}else{
				?>
				<script type="text/javascript">
					window.alert("Maaf, Pesan Anda belum dikirim.");
				</script>
				<?php
			}
		}
	}

	
 ?>
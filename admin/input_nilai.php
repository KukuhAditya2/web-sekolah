<?php include '../tamplate/header.php'; ?>
<?php
include "../koneksi.php";
?>

<body>

	<?php include('../napigasi2.php'); ?>

	<div class="clearfix"> </div>
	<!-- Input Nilai -->
	<?php
	include "../koneksi.php";

	$mapel = "SELECT * FROM `mata_pelajaran` WHERE nama_matapelajaran = '$_POST[mata_pelajaran]';";
	$hasil_mapel = mysqli_query($koneksi, $mapel);
	$data_mapel = mysqli_fetch_array($hasil_mapel)
	?>

	<div id="Input Nilai">
		<div class="container roma-batasan">
			<form action="process_guru.php" method="post">
				Nama Mata Pelajaran : <input type="text" name="Nama_Mata_Pelajaran" value="<?php echo $_POST['mata_pelajaran']; ?>" Readonly> <br><br>
				Jurusan : <input type="text" name="Jurusan" value="<?php echo $data_mapel['jurusan']; ?>" size='2' Rseadonly><br><br>
				Kelas : <input type="text" name="Kelas" value="<?php echo $data_mapel['kelas']; ?>" size='2' Readonly><br><br>

				<table class="table table-bordered">
					<tr>
						<td width="150" align="center">NISN</td>
						<td width="150" align="center">Nama Murid</td>
						<td wsidth="80" align="center">Nilai UTS</td>
						<td width="80" align="center">Nilai UAS</td>
					<tr>

						<?php
						$tampil_murid = "SELECT * FROM murid WHERE jurusan = '$data_mapel[jurusan]' and kelas = '$data_mapel[kelas]'";
						$hasil_murid = mysqli_query($koneksi, $tampil_murid);

						$N = 1;
						$T = 10000;
						$A = 20000;

						while ($data_murid = mysqli_fetch_array($hasil_murid)) {
							$tampil_nilai = "SELECT * FROM `nilai` WHERE nama_murid = '$data_murid[nama_murid]' and jurusan = '$data_murid[jurusan]' and kelas = '$data_mapel[kelas]' and nama_matapelajaran = '$_POST[mata_pelajaran]'";
							$hasil_nilai = mysqli_query($koneksi, $tampil_nilai);
							$data_nilai = mysqli_fetch_array($hasil_nilai);

							$nilai_UTS = !isset($data_nilai['nilai_UTS']) ? "" : $data_nilai['nilai_UTS'];
							$nilai_UAS = !isset($data_nilai['nilai_UAS']) ? "" : $data_nilai['nilai_UAS'];

							echo "
							<td> $data_murid[nisn] </td>
							<td class='text-left'> <input type='text' name='$N' value='$data_murid[nama_murid]' Readonly> </td>			
							<td align='center'> <input type='text' name='$T' value='$nilai_UTS' maxlength='3' size='1'/>  </td>
							<td align='center'> <input type='text' name='$A' value='$nilai_UAS' maxlength='3' size='1'/> </td>
							</TR>
		 					";

							$N++;
							$T++;
							$A++;
						}

						?>

				</table>
				<button class="btn btn-primary"> Simpan </button>
			</form>
		</div>
	</div>

	<!-- //Laporan Nilai -->

	<!-- js-scripts -->
	<!-- js-files -->
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js-files -->
	<!-- Baneer-js -->



	<!-- smooth scrolling -->
	<script src="../js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->
	<!-- stats -->
	<script type="text/javascript" src="../js/numscroller-1.0.js"></script>
	<!-- //stats -->
	<!-- moving-top scrolling -->
	<script type="text/javascript" src="../js/move-top.js"></script>
	<script type="text/javascript" src="../js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
		</span></a>
	<!-- //moving-top scrolling -->
	<!-- gallery popup -->
	<script src="../js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!-- //gallery popup -->
	<!--/script-->
	<script src="../js/simplePlayer.js"></script>
	<script>
		$("document").ready(function() {
			$("#video").simplePlayer();
		});
	</script>
	<!-- //Baneer-js -->
	<!-- Calendar -->
	<script src="../js/jquery-ui.js"></script>
	<script>
		$(function() {
			$("#datepicker").datepicker();
		});
	</script>
	<!-- //Calendar -->

	<!-- //js-scripts -->
</body>

</html>
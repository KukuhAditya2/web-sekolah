<?php include '../tamplate/header.php'; ?>

<body>

	<?php include('../napigasi2.php'); ?>
	<div class="clearfix"> </div>

	<!-- Mata Pelajaran -->
	<div id="Akun_Control">
		<div class="container">
			<h3 class="w3l-title"> Mata Pelajaran </h3>
			<a href="tambah_mata_pelajaran.php"> <button class="btn btn-success" style="margin-bottom: 10px;">+ Tambah Mata Pelajaran </button> </a>
			<div>
				<table class="table table-bordered text-center">
					<tr>
						<td><b> Kode Mata Pelajaran </td>
						<td><b> Nama Mata Pelajaran </td>
						<td><b> Nama Guru </td>
						<td width="100"><b> Kelas </td>
						<td width="100"><b> Jurusan </td>
						<td colspan="2"><b> Aksi </td>
					</tr>

					<?php
					include('../koneksi.php');
					$tampil = "SELECT * FROM `mata_pelajaran`";
					$hasil = mysqli_query($koneksi, $tampil);

					while ($data = mysqli_fetch_array($hasil)) {
						$tampil_guru = "SELECT * FROM `guru` WHERE nip = '$data[nip]'";
						$hasil_guru = mysqli_query($koneksi, $tampil_guru);
						$data_guru = mysqli_fetch_array($hasil_guru);

						echo "	</TR>
			<td> $data[kode_mata_pelajaran] </td>
            <td> $data[nama_matapelajaran] </td>
			<td> $data_guru[nama_guru] </td>
			<td width='100'> $data[kelas] </td>
			<td width='100'> $data[jurusan] </td>
			<td width='100'><a href='mata_pelajaran_edit.php?kode=$data[kode_mata_pelajaran]'> Edit </a></td>
			<td width='100'><a href='Hapus_Mata_Pelajaran.php?kode=$data[kode_mata_pelajaran]'> Hapus</a></td>
			</TR>";
					}
					?>
				</table>
			</div>

			<div class="clearfix margin-bawah"></div>
		</div>
	</div>

	<!-- //Mata Pelajaran -->

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
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
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
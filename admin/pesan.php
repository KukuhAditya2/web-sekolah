<?php include '../tamplate/header.php'; ?>
<?php
include('../koneksi.php');
?>

<body>

	<?php include('../napigasi2.php'); ?>

	<div class="clearfix"> </div>
	<!-- Pesan -->
	<div id="Akun_Control">
		<div class="container mar">
			<h3 class="w3l-title">Pesan</h3>

			<div class="margin-atas">
				<table class="table table-bordered text-center">
					<tr>
						<td width="100"><b> Tanggal </td>
						<td><b> Subject </td>
						<td><b> Nama </td>
						<td><b> Email </td>
						<td width="150"><b> Nomor Handphone </td>
						<td><b> Pesan </td>
						<td width="50"><b> Aksi </td>
					</tr>

					<?php
					$tampil = "SELECT * FROM `pesan` ORDER BY `pesan`.`Tanggal` ASC ";
					$hasil = mysqli_query($koneksi, $tampil);

					while ($data = mysqli_fetch_array($hasil)) {
						echo "
							<tr>
								<td> $data[Tanggal] </td>
								<td class='text-left'> $data[Subject] </td>
								<td class='text-left'> $data[Nama] </td>
								<td class='text-left'> $data[Email] </td>
								<td> $data[No_HP] </td>
								<td> $data[Isi] </td>		
								<td width='100'> <a href='hapus_pesan.php?kode=$data[Isi]'> Hapus</a> </td>
							</tr>";
					}

					?>

				</table>
			</div>

			<div class="clearfix margin-bawah"></div>
		</div>
	</div>

	<!-- //Pesan -->

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
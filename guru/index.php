<?php include '../tamplate/header.php'; ?>

<body>

	<?php include('../napigasi2.php'); ?>

	<div class="clearfix"> </div>
	<!-- Pilih Mata Pelajaran -->
	<div id="Pilih_Mata_Pelajaran">
		<div class="container roma-batasan">
			<form action="nilai.php" method="post">
				<table class="table roma-table" border=0>
					<tr>
						<td>Mata Pelajaran :</td>
						<td>
							<select name="mata_pelajaran">

								<?php
								include('../koneksi.php');

								$tampil = "SELECT * FROM `mata_pelajaran`";
								$hasil = mysqli_query($koneksi, $tampil);

								while ($data = mysqli_fetch_array($hasil)) {
									echo "	<option value='$data[nama_matapelajaran]'>$data[nama_matapelajaran]</option> ";
								}

								?>
							</select>
						</td>
					</tr>

					<tr>
						<td colspan=2 align="left"><button class="btn btn-primary"> Tampilkan </button> </td>
					</tr>
				</table>
			</form>
		</div>
	</div>

	<!-- //Pilih Pata Pelajaran -->

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
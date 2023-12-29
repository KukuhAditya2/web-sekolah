<?php include '../tamplate/header.php' ?>
<?php
include "../koneksi.php";
?>

<body>

	<?php include('../napigasi2.php'); ?>

	<div class="clearfix"> </div>
	<!-- //Modal2 -->
	<!-- Laporan Nilai -->

	<div id="Laporan Nilai">
		<div class="container roma-batasan">

			<?php
			//$NISN=$_POST['NISN'];
			$query = mysqli_query($koneksi, "select * from murid where username='$_SESSION[username]'");
			$data = mysqli_fetch_array($query);
			?>

			<table class="table-condensed">
				<tr>
					<td> Nama </td>
					<td> : </td>
					<td> <input type="text" name="no_tlp" id="No_HP" value="<?php echo $data['nama_murid']; ?>" Readonly> </td>
				</tr>
				<tr>
					<td> Kelas </td>
					<td> : </td>
					<td> <input type="text" name="no_tlp" id="No_HP" value="<?php echo $data['kelas']; ?>" Readonly> </td>
				<tr>
					<td> Jurusan </td>
					<td> : </td>
					<td> <input type="text" name="no_tlp" id="No_HP" value="<?php echo $data['jurusan']; ?>" Readonly> </td>
				</tr>
			</table>

			<br>

			<table border=1 class="table table-bordered">
				<tr>
					<td width="150" align="center">Mata Pelajaran</td>
					<td width="80" align="center">Nilai UTS</td>
					<td width="80" align="center">Nilai UAS</td>
				<tr>

					<?php
					$Nama_Murid = $data['nama_murid'];
					$Kelas 		= $data['kelas'];
					$Jurusan	= $data['jurusan'];
					$tampil = "SELECT * FROM nilai WHERE nama_murid = '$Nama_Murid' AND kelas = '$Kelas' AND jurusan = '$Jurusan'";
					$hasil = mysqli_query($koneksi, $tampil);

					while ($data = mysqli_fetch_array($hasil)) {
						echo "
						<tr>
							<td> $data[nama_matapelajaran]</td>
							<td align='center'>$data[nilai_UTS]</td>
							<td align='center'>$data[nilai_UAS]</td>
						<tr>
					";
					}

					?>

			</table>

		</div>
	</div>

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
<?php include '../tamplate/header.php' ?>
<?php include "../koneksi.php"; ?>
<body>

<?php include ('../napigasi2.php'); ?>

<div class="clearfix"> </div> 
<!-- Input Guru -->
<div id="Edit_Akun">
	<div class="container">
    <h3 class="w3l-title cl"> Guru </h3>
    <div class="container margin-atas">	
	
<?php 
include ('../koneksi.php');
$tampil="SELECT * FROM `akun` ORDER BY `username` ASC ";
$hasil=mysqli_query($koneksi, $tampil);
?>
	
    <form class="form-group" action="Proses_Tambah_Guru.php" method="post" >
    <table class="table">
	<tr>
		<td> NIP : </td>
		<td> <input type="text" name="nip" maxlength="10" size="8" onkeypress="return hanyaAngka(event)" required=""> </td>
	</tr>
	
    <tr>
    	<td> Nama Guru : </td>
   		<td> <input type="text" name="nama_guru"> </td>
    </tr>
	
	<tr>
    	<td> Username : </td>
   		<td> <select name="Username">
				<?php 
				while ($data=mysqli_fetch_array($hasil))
				{
					echo "<option value='$data[username]'> $data[username] </option> ";
				}
				?>
			 </select>
		</td>
    </tr>
    
    <tr>
    	<td> No Telepon : </td>
        <td> <input type="text" name="no_tlp" id="No_HP" onkeypress="return hanyaAngka(event)"/> </td>
    </tr>
	
	<tr>
    	<td> Jenis Kelamin : </td>
   		<td><select name="jenis_kelamin">
    			<option value="Laki-Laki" selected> Laki-Laki </option>
				<option value="Perempuan"> Perempuan </option>
			</select>
		</td>
    </tr>
	
	<tr>
    	<td> Agama : </td>
   		<td><select name="agama">
    			<option value="Islam" selected> Islam </option>
				<option value="Kristen"> Kristen </option>
				<option value="Katolik"> Katolik </option>
				<option value="Hindu" > Hindu </option>
				<option value="Buddha"> Buddha </option>
				<option value="Kong_Hu_Cu"> Kong Hu Cu </option>
			</select>
		</td>
    </tr>
    </table>    
	
    <button class="btn btn-primary" id="Simpan"> Simpan </button>
	<a href="guru.php" class="btn btn-primary"> Batal </a>
    </form>
    
    </div>
        
    <div class="clearfix margin-bawah"></div>
    </div>
</div>

<script type="text/javascript">
function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))

    return false;
    return true;
}
</script>

<!-- //Admin Pannel -->

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
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
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
		$().UItoTop({ easingType: 'easeOutQuart' });
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
		$( "#datepicker" ).datepicker();
	 });
	</script>
<!-- //Calendar -->	

<!-- //js-scripts -->
</body>
</html>
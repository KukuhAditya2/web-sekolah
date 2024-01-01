<?php include "../tamplate/header.php"; ?>
<?php
include ('../koneksi.php');
?>
<body>

<?php include ('../napigasi2.php'); ?>

<div class="clearfix"> </div> 
<!-- //Modal2 -->
	
<!-- Akun Control -->
<div id="Akun_Control" style="margin-top: 70px;">
	<div class="container">
    <h3 class="w3l-title"> Akun Control </h3>
    
    <a href="tambah_akun.php"> <button class="btn btn-success" style="margin-bottom: 10px;">+ Tambah Akun </button> </a>
    <div>
    	<table class="table table-bordered text-center">
        <tr>
        	<td><b> Username </td>
            <td width="150"><b> Level </td>
            <td colspan="2"><b> Aksi </td>
        </tr>
        
<?php	
$tampil="SELECT * FROM `akun` ORDER BY `akun`.`username` ASC  ";
$hasil=mysqli_query($koneksi, $tampil);

while ($data=mysqli_fetch_array($hasil))
{
	if ($data['level'] == 1)
	{
		$Level = "Admin";
	}
	else if ($data['level'] == 2)
	{
		$Level = "Guru";
	}
	else
	{
		$Level = "Murid";
	}
	
	echo "<td class='text-left'>$data[username]</TD>";
	echo "<td>$Level</TD>";
	echo "<td width='100'><a href='akun_edit.php?kode=$data[username]'>Edit </a></td>";
	echo "<td width='100'><a href='hapus_akun.php?kode=$data[username]'>Hapus </a></td>
</TR>";
}
		
?>
        
</table>
    </div>
    
    <div class="clearfix margin-bawah"></div>
    </div>
</div>

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
<?php include "../tamplate/footer.php"; ?>
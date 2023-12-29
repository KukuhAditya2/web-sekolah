<?php include '../tamplate/header.php'; ?>
<body>

<?php include ('../napigasi2.php'); ?>
<div class="clearfix"> </div> 

<!-- Tambah Akun -->
<div id="Edit_Akun">
	<div class="container">
    <h3 class="w3l-title cl"> Akun Control </h3>
    <div class="container margin-atas">
    <form class="form-group" action="Proses_Input_Akun.php" method="post">
    <table class="table">
    <tr>
    	<td> Username : </td>
   		<td> <input type="text" name="Username"> </td>
    </tr>
    
    <tr>
    	<td> Password : </td>
        <td> <input type="password" name="Password"> </td>
    </tr>
    
    <tr>
    	<td>Level : </td>
        <td><select name="Level">
    			<option value="1" selected> Admin </option>
				<option value="2"> Guru </option>
				<option value="3"> Murid </option>
			</select>
      	</td>
 	</tr>
    </table>
    
    <button class="btn btn-primary"> Simpan </button>
    <a href="akun.php" class="btn btn-primary"> Batal </a>
    </form>
    
    </div>
        
    <div class="clearfix margin-bawah"></div>
    </div>
</div>

<!-- Tambah Akun -->

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
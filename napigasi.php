<!-- banner -->
<div style="background-color: #11235A" id="home">
	<div class="agileits_w3layouts_banner_nav">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<h1><a class="navbar-brand d-flex align-items-center" href="index.php"> SMKP Dirghantara</a></h1>

			</div>
			<div class="w3layouts_header_right ">
			    <form action="#" method="post">
					
					
				</form>
			</div>
			
			<?php
			@session_start();
			if (empty($_SESSION['username']))
			{
				//echo "<a href='./Login'> Login </a>";
				echo "
				<ul class='agile_forms'>
				<li><a class='active' href='#' data-toggle='modal' data-target='#myModal2'><i class='fa fa-sign-in' aria-hidden='true'></i> Masuk </a> </li>
				<li><a href='#' data-toggle='modal' data-target='#myModal3'><i class='fa fa-pencil-square-o' aria-hidden='true'></i> Daftar </a> </li>
				</ul>";
			}
			else
			{
				if ($_SESSION['level'] == "admin")
				{
				echo "
						
						<ul class='agile_forms'>
							<div class='dropdown'>
							<button class='btn btn-success dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
							$_SESSION[username] <span class='caret'></span>
							</button>
							<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
							<table class='table'>
								<tr>
									<td><a class='dropdown-item' href='admin'>Menu Admin</a></td>
								</tr>
								
								<tr>
									<td><a class='dropdown-item' href='admin/akun.php'>Akun</a></td>
								</tr>
								
								<tr>
									<td><a class='dropdown-item' href='admin/murid.php'>Murid</a></td>
								</tr>
								
								<tr>
									<td><a class='dropdown-item' href='admin/guru.php'>Guru</a></td>
								</tr>
								
								<tr>
									<td><a class='dropdown-item' href='admin/nilai.php'>Nilai</a></td>
								</tr>
								
								<tr>
									<td><a class='dropdown-item' href='admin/pesan.php'>Pesan</a></td>
								</tr>
								
								<tr>
									<td><a class='dropdown-item' href='admin/mata_pelajaran.php'>Mata Pelajaran</a></td>
								</tr>
																
								<tr>
									<td><a class='dropdown-item' href='logout.php'>Logout</a></td>
								</tr>
							</table>
							</div>
							</div>
						</ul>
						
					 ";
				}
				else if ($_SESSION['level'] == "guru")
				{
				echo "
						
						<ul class='agile_forms'>
							<div class='dropdown'>
							<button class='btn btn-success dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
							$_SESSION[username] <span class='caret'></span>
							</button>
							<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
							<table class='table'>
								<tr>
									<td><a class='dropdown-item' href='guru'>Input Nilai</a></td>
								</tr>
								
								<tr>
									<td><a class='dropdown-item' href='logout.php'>Logout</a></td>
								</tr>
							</table>
							</div>
							</div>
						</ul>
						
					 ";
				}
				else
				{
				echo "
						
						<ul class='agile_forms'>
							<div class='dropdown'>
							<button class='btn btn-success dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
							$_SESSION[username] <span class='caret'></span>
							</button>
							<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
							<table class='table'>
								<tr>
									<td><a class='dropdown-item' href='murid'>Cek Nilai</a></td>
								</tr>
								
								<tr>
									<td><a class='dropdown-item' href='logout.php'>Logout</a></td>
								</tr>
							</table>
							</div>
							</div>
						</ul>
						
					 ";
				}
				
			}
			?>
			
			
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li><a href="index.php" class="effect-3">Beranda</a></li>
						<li><a href="fasilitas.php" class="effect-3">Fasilitas </a></li>
						<li><a href="profile_sekolah.php" class="effect-3">Profil Sekolah</a></li>
						<li><a href="location.php" class="effect-3">Location</a></li>
						<li><a href="mail.php" class="effect-3">Kesan & Pesan</a></li>
					</ul>
				</nav>
			</div>
		</nav>	
		<div class="clearfix"> </div> 
	</div>
</div>

<!-- Modal1 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="signin-form profile">
					<h3 class="agileinfo_sign">Masuk</h3>	
					<div class="login-form">
						<form action="proses_login.php" method="post">
							<input type="text" name="username" placeholder="Username" required="">
							<input type="password" name="password" placeholder="Password" required="">
							<div class="tp">
								<input type="submit" value="Masuk">
							</div>
						</form>
					</div>
					<div class="login-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
					<p><a href="#" data-toggle="modal" data-target="#myModal3" > Don't have an account?</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Modal1 -->	
<!-- Modal2 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="signin-form profile">
					<h3 class="agileinfo_sign">Daftar</h3>	
					<div class="login-form">
						<form action="proses_daftar.php" method="post" onkeyup='check();'>
						   <input type="text" name="username" placeholder="Username" required="">	
							<input type="password" name="password" id="Password1" placeholder="Password" required="">
							<input type="password" name="password" id="Password2" placeholder="Confirm Password" required="">
							<span id='message'></span>
							
							<input type="text" name="nisn" placeholder="NISN" maxlength="10" required="">
							<input type="text" name="nama_murid" placeholder="Nama" required="">
							<input type="text" name="kota" placeholder="Kota" required="">
							
<table class="table text-left">	
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
    
    <tr>
    	<td> Jurusan : </td>
        <td> <select name="jurusan">
    			<option value="AP" selected> AP </option>
				<option value="AE"> AE </option>
			 </select>
       	</td>
    </tr>
    
    <tr>
    	<td>Kelas : </td>
        <td><select name="kelas">
    			<option value="1" selected> 10 </option>
				<option value="2"> 11 </option>
				<option value="3"> 12 </option>
			</select>
      	</td>
 	</tr>
    </table>
							
							<input type="submit" value="Daftar" id="Daftar">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="validasi_daftar.js"></script>

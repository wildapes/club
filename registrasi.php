<!DOCTYPE html>
<html>
<head>
<?php
	include 'acakcode.php';
	include 'dbConnect.php';
		if(!empty($_POST)){
	
		$kode	= $fix;
		$password = mysql_real_escape_string(password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT));
		$username = mysql_real_escape_string(htmlspecialchars($_POST['username']));
		$nama = mysql_real_escape_string(htmlspecialchars($_POST['nama']));
		$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
		$nohp = mysql_real_escape_string(htmlspecialchars($_POST['nohp']));
		$alamat = mysql_real_escape_string(htmlspecialchars($_POST['alamat']));
		
		$query = mysql_query("select * from ex_user where username='$username'") or die(mysql_error());
		$row = mysql_fetch_array($query);	
		
		$query1 = mysql_query("select * from ex_user where email='$email'") or die(mysql_error());
		$row1 = mysql_fetch_array($query1);
		
		
		if($row < 1){
			if($row1 < 1){
				
			$query = mysql_query("INSERT INTO ex_user VALUES ('', '$username', '$password', '$nama', '$email', '$nohp', '$alamat', 'T', '$kode' )") or die (mysql_error());

		$to 	= mysql_real_escape_string(htmlspecialchars($_POST['email']));
		$judul 	= "Aktivasi Akun Anda";
		$dari	= "From: sjazaakfirdaus@terster12.16mb.com \n";
		$dari	.= "Content-type: text/html \r\n";

		$pesan	= "Untuk mengaktifkan akun silakan masukkan kode berikut: <br />".$kode;

		$kirim	= mail($to, $judul, $pesan, $dari);

		if($kirim AND $query)
		{
			header('location:belum_konfirmasi.php?user='.$username);
		}
		else
		{
			echo "<p class=infoGagal>Gagal Dikirim silahkan lakukan registrasi ulang</p>";
		}
		}
		else{
			echo "email telah digunakan";
		}
			}
		
		else{
			echo "Username telah digunakan";
		}

}

?>





<script type="text/javascript">
  function ganti()
  {
    alert("Anda akan diarahkan ke halaman login untuk masuk menggunakan user dan password baru anda")
  }
  
   function ShowHide() {
            if (document.getElementById('show').checked) {
                document.getElementById('password').type = 'text';
            } else {
                document.getElementById('password').type = 'password';
            }
        }
  </script>
<!---for google to not indexing your website--->
<META NAME="robots" CONTENT="noindex,nofollow">

  
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<!--//fonts-->
</head>
<body> 
	  <!--header-->
		<div class="header">
		<div class="header-top">
				</div>
		<div class="container">
		<div class="header-bottom">			
				<div class="logo">
					</br><img width="200" height="90" src="images/0.png" alt=" " ></a>
				</div>
					
				<div class="clearfix"> </div>
			</div>	
				</div>
	</div>
	<!--content-->
	 <div class="content">
			<div class="container">
				<div class="contact">
				<div class="contact-in">
				<h3>Daftar</h3>
				<div class=" col-md-9 contact-left">
				  
		</div>

					<form action="" method="post">
							<div class="form-group has-feedback">
								<input type="text" class="form-control" pattern=".{4,}" name="username" id="username" placeholder="Username" required="">
							</div>
						     
							 <div class="form-group has-feedback">
								<input type="password" class="form-control" pattern=".{4,}" name="password" id="password" placeholder="Password" required="">
							</div>
							
							<div class="form-group has-feedback">
								<input type="text" class="form-control" name="nama" id="nama" placeholder="nama" required="">
							</div>
							
							<div class="form-group has-feedback">
								<input type="email" class="form-control" name="email" id="email" placeholder="email" required="">
							</div>
							
							<div class="form-group has-feedback">
								<input type="number" class="form-control" name="nohp" id="nohp" placeholder="nomer Hp" required="">
							</div>
								
							<div class="form-group has-feedback">
								<input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat" required="">
							</div>

						  <div>
							<button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
						  </div>
					    </form></br>
*username & password minimal 4 karakter 						
				  </div>

					  <div class="clearfix"></div>
				 </div>
				

      		</div>
		    </div>
	</div>
	<!---->

	<!---->
	<div id="footer">
		<div class="container">
				<div class="footer-class">
				<div class="class-footer">
					
					 <p class="footer-grid">&copy; 2017 Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
				</div>	 
				<div class="clearfix"> </div>
			 	</div>
		 </div>
	</div>
</body>
</html>
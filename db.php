<!DOCTYPE html>
<html>
<head>
	<title>Club | Pake Database</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="data_regis.php">Data Registrasi</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</div>

<div class="container">
<div class="col-md-6">
<form class="form-horizontal" method="post" action="validasi.php">

<!-- form nama -->
  <div class="form-group">
    <label class="control-label col-sm-2" for="nama">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name= "nama" id="nama" placeholder="Masukkan nama">
    </div>
  </div>

<!-- form email -->
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email">
    </div>
  </div>

  <!-- form no hp -->
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">No HP</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="hp" id="pwd" placeholder="Masukkan nomor HP">
    </div>
  </div>

  <!-- form radio button buat gender -->
  <div class="form-group" >
  	<label class="control-label col-sm-2">Gender</label>
  	<div class="col-sm-10">
  		<label class="radio-inline"><input type="radio" name="gender" value="Laki-Laki">Laki-Laki</label>
		<label class="radio-inline"><input type="radio" name="gender" value='Perempuan'>Perempuan</label>
  	</div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>CLUB SOFTWARE</title>
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
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="data_regis.php">View All</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </nav>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <form class="form-horizontal" method="post" action="validasi.php">
        <div class="form-group">
          <label class="control-label col-sm-2" for="nama">Nama:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="no_hp">No. HP:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="no_hp" placeholder="No. HP" name="no_hp">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control label col-sm-2" for="gender">Gender:</label>
          <div class="col-sm-10">
            <label class="radio-inline"><input type="radio" name="gender" value="laki">Laki-laki</label>
            <label class="radio-inline"><input type="radio" name="gender" value="perempuan">Perempuan</label>
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form> 
    </div>
  </div>
</div>




</body>
</html>
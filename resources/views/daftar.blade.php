<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="row">
		<div class="col">
			<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  				<a class="navbar-brand" href="#">Ini Ceritanya Daftar</a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  				  <span class="navbar-toggler-icon"></span>
  				</button>
  				<div class="collapse navbar-collapse" id="navbarSupportedContent">
  				  <ul class="navbar-nav mr-auto">
  				    
  				  </ul>
  				</div>
			</nav>
			
		</div>
	</div>
<div class="container mt-5 bg-light px-5 py-5">
	<div class="row">
		<div class="col-5">
			<form method="post" action="/daftar">
        {{ csrf_field ()}}
  				<div class="form-group">
  				  <label for="exampleInputEmail1">Judul</label>
            <input type="text" name="judul" required="required">  				
          </div>
  				<div class="form-group">
  				  <label for="exampleInputPassword1">Penerbit</label>
            <input type="text" name="penerbit" required="required"> 
  				</div>
  				<div class="form-group">
  				  <label for="exampleInputPassword1">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" required="required">  				
          </div>
  				<div class="form-group">
  				  <label for="exampleInputPassword1">Pengarang</label>
            <input type="text" name="pengarang" required="required"> 
  				</div>
  				<button type="submit" value="Simpan Data" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<div class="col">
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" style="width: 500px; height: 300px">
		</div>
	</div>
</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
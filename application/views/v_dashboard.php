<!DOCTYPE html>
<html>
<head>
	<title>E-Library</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>	
	<!-- membuat menu navigasi -->
	<nav class="navbar navbar-default">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="https://www.malasngoding.com">E-Library</a>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#">Home <span class="sr-only">(current)</span></a></li>
					<li><a href="#">About Us</a></li>
				</ul>
			<!-- Tombol Search -->
				<form class="navbar-form navbar-left" role="search">
  					<div class="form-group">
   					 	<input type="text" class="form-control" placeholder="Search">
  					</div>
  						<button type="submit" class="btn btn-default">GO!</button>
				</form>
			<!-- Akhir Tombol Search -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#modal-login">Login</a></li>					
					<li><button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#modal-daftar">Daftar</button></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>	

	<!-- Awal Modal login -->
	<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<form action="cek_login.php" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal Login</h4>
				</div>
				<div class="modal-body">
					
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password">
						</div>						
				
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="button" class="btn btn-primary">Login</button>
				</div>
			</div>
		</form>
		</div>
	</div>
	<!-- akhir modal login-->
	<div class="modal fade" id="modal-daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal Daftar</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control">
						</div>						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="button" class="btn btn-primary">Daftar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- akhir modal -->

	<!-- akhir menu navigasi -->

	<div class="container">			
		<!-- membuat jumbotron -->
		<div class="jumbotron">
			<center>			
				<h2>Selamat datang di E-Library Fakultas Teknologi Informasi <h2>
					<h2>Universitas Sembilanbelas November Kolaka</h2>
				<p>Website Buku Elektronik Yang Dapat Diunduh Langsung !!</p><br/><br/>
				<p><a class="btn btn-primary btn-lg" href="#" role="button">Mulai Belajar !</a></p>
			</center>
		</div>
		<!-- akhir jumbotron -->
		<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
				<img src="gambar/book.jpg" alt="...">
				<div class="caption">
					<h3>Tutorial JQuery</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris</p>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
				<img src="gambar/Book - Copy.jpg" alt="...">
				<div class="caption">
					<h3>Tutorial Ionic</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris</p>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
				<img src="gambar/Book - Copy (3).jpg" alt="...">
				<div class="caption">
					<h3>Tutorial CodeIgniter</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris</p>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
				<img src="gambar/Book - Copy (4).jpg" alt="...">
				<div class="caption">
					<h3>Tutorial Bootstrap</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris</p>		
				</div>
			</div>
		</div>

	</div>
	<br/>
	
	
	<div class="clearfix"></div>
		
	<nav class="navbar navbar-default" style="bottom: 0;margin: 0">
		<div class="container">	
			<center>
				
			<ul class="nav navbar-nav">
				<li><a href="#">Copyright @ FTI USN Kolaka. All rights reserved.</a></li>				
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Develop by Suharsono</a></li>									
			</ul>
			</center>		
		</div>
	</nav>
</body>
</html>
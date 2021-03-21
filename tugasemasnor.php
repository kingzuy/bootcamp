<?php 
$KONEKSI = mysqli_connect("localhost","root","","db_blog");
if ( isset($_GET['id']) ) {
	$id = abs($_GET['id']);
}else{
	$id = 1;
}
$data_array = mysqli_fetch_array(mysqli_query($KONEKSI,"SELECT * FROM tb_artikel WHERE id='$id'"));
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>tugase mz norrrrr</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
</head>

<style>
/*font*/
@import url('https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');

.logo{
	font-family: Noto Serif;
	font-style: normal;
	font-weight: bold;
	font-size: 55px;
	line-height: 75px;
	position: absolute;
	width: 278px;
	height: 81px;
	left: 60px;
	/*top: 5%;*/
}
nav{
	font-family: noto Serif;
	margin-top: 1%;
	background-color: #848484;l
}
.blog{
	font-family: Noto Serif;
	font-style: normal;
	font-weight: normal;
	font-size: 27px;
	color: #64CFE7;
}
.img-kiri{
		position: relative;
		z-index: 1;
		top: 0px;
		width: 100%;
}
.card-kiri h5{
    font-family: Orbitron;
    font-style: normal;
    font-weight: normal;
    font-size: 280%;
    position: absolute;
    top: 16%;
    z-index: 2;
    color: #FEFEFE; 
}
h4{
	font-family: Noto Serif;
	font-style: normal;
	font-weight: normal;
	font-size: 15px;
}
.img-berita{
	float: left;
	width: 100%;
}
footer h1{
		
	font-family: Noto Serif;
	font-style: normal;
	font-weight: bold;
	font-size: 55px;
	line-height: 75px;
}
footer{
		clear: both;
		background-color: #848484;
		font-family: noto Serif;
		margin-bottom: -17px;
		text-align: center;
}
</style>

<body>
<div class="logo mt-3">
	<h1>BLOG.ME</h1>
</div>
<div class="d-grid gap-2 mx-auto justify-content-md-end me-5 mt-3">
  <button  onclick="window.location.href='https://wa.me/+6281339746771'" class="btn btn-primary me-md-2 btn btn-success" type="button"><i class="bi bi-whatsapp"></i>  Whatsapp</button>
  <button onclick="window.location.href='https://instagram.com/33svar'" class="btn btn-primary btn btn-danger" type="button"><i class="bi bi-instagram"></i> Instagram</button>
</div>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid ms-5 me-5">
    <a class="navbar-brand" href="#">BERANDA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active ms-1 me-1" aria-current="page" href="#">LAYANAN</a>
        <a class="nav-link active ms-1 me-1" aria-current="page" href="#">TENTANG KAMI</a>
      </div>
      <div class="navbar-nav ms-auto">
      	<input class="form-control " type="search" placeholder="Search" aria-label="Search">
         <button type="button" class="btn btn-light"><i class="bi bi-search"></i></button>
        <a class="nav-link active ms-1 me-1" aria-current="page" href="#">LOGIN</a>
      </div>
    </div>
  </div>
</nav>
<div class="blog">
	<p class="mt-3 ms-5">BLOG</p>
</div>
</div>
<!-- card kiri -->
<div class="card-kiri">
<div class="card ms-5" style="width: 50%; float: left;">
  <div class="card-body">
    <img class="img-kiri" src="<?php echo $data_array['gambar']; ?>"></a>
  	<h5 class="card-title ms-4 "><?php echo $data_array['judul']; ?></h5>
    <p class="card-text"><?php echo $data_array['isi']; ?></p>
  </div>
</div>
</div>
<!-- card kanan -->
<div class="card mb-3 ms-auto" style="max-width: 540px; margin-right: 5%;">
	<div class="blog">
	<p class="mt-3 ms-5">Brita Terbaru</p>
</div>
  <?php 
		$data_semua = mysqli_query($KONEKSI,"SELECT * FROM tb_artikel");
		while ($array_all = mysqli_fetch_array($data_semua)) {
   ?>
   <a class="row g-0 text-decoration-none text-dark" href="?id=<?php echo $array_all['id'];?>">
    <div class="col-md-4">
      <img style="width: 100%;" src="<?php echo $array_all['gambar'];?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $array_all['judul'];?></h5>
      </div>
    </div>
  </a>
  <hr>
<?php } ?>
</div>
	<footer>
		<h1 >BLOG.ME</h1>
		<p >Jalan Tb. Simatupang No. 5
		Ragunan,Ps. Minggu,Jakarta Selatan,
		Indonesia 12550</p>
	</footer>
</body>
</html>
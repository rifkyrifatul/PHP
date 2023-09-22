<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tugas 7 layotti</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
		 		 Welcome <small> To My Bio</small>
				</h1>
			</div> 
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" href="#profil"> Profil</a>
			</li>
				<li class="nav-item">
					<a class="nav-link" href="$#experience">Experience</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#kontak">Kontak</a>
				</li>
				<li class="nav-item dropdown ml-md-auto">
			
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
						<div class="dropdown-divider">
						</div> <a class="dropdown-item" href="#">Separated link</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<?php

	$profil="Nama saya Rifky Rifatul Aziz Mahasiswa aktif STMIK Jabar Bandung program studi Teknik Informatika (S1). Saya berasal dari Garut, lahir pada 11 Juli 2002.
				<br> Sekarang saya mengikuti Program MBKM Studi Independent di PT Hendevane dengan mengambil fokus pada Full Stack Web Developer.";
	$pengalaman= array(array("title" => "magang", "description" =>"
				Kerja Magang (Digital Printing)
				Admin: Melayani Konsumen dan mengelola pendapatan sehari- hari. Membuat sketsa dan mengkomunikasikan terkait skets yang telah dibuat dengan konsumen.
				Desainner: Mengimplementasikan sketsa yang sudah dibuat dalam bentuk gambar digital."),

	array("title" => "organisasi", "description" =>"
					Ketua Divisi SDM HiMATIF 
					Bergerak di bidang pengembangan sumber daya mahasiswa dan juga melakukan pengkaderan terhadap mahasiswa yang akan melanjutkan kepengurusan selanjutnya.
						Ketua Media Kampus 
					- Bertanggung jawab atas pelaksanaan program Kerja<br>
					- Mengkoordinir semua rapat pengurus <br>
					- Menetapkan kebijakan <br>
					- Memimpin rapat <br>"
				  ));

	$kontak = array("kota" => "Kabupaten Garut", "kecamatan" => "Kecamatan Selaawi", "phone"=>"085624365103");
	
	
	echo "<p>$profil</p>";
			echo "<div class=\"row\">";
    foreach ($pengalaman as $experience) {
        echo "<div class=\"col-md-6\">";
        echo "<h2>" . $experience["title"] . "</h2>";
        echo "<p>" . $experience["description"] . "</p>";
        echo "</div>";
		// echo ""
		
    }
	echo "</div>";
	echo "<div class=\"kontak\">";
	echo "<div class=\"col-md-12\">";
	echo "<address>";
	echo "<strong>Jawa Barat</strong><br>".$kontak["kota"]."<br>".$kontak["kecamatan"]."<br>".$kontak["phone"];
	echo "</address>";
	echo "</div>";   
	   
	?>
 		</div>
	</div>
</div>
</section>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

	</body>
</html>
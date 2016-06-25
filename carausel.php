<?php
  include "koneksi.php"; //menyisipkan file koneksi.php
  
  // query tabel slideshow —
  $sqlslide = "select * from artikel";
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
   <div class="col-md-8">
     <div id="dmbannerhead" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
 <?php
   if($res = $database->query($sqlslide)) {
    $x = 0;
    while ($row = $res->fetch_assoc()) {
	  if($x==0) $aktif = "active";
      else $aktif = '';
  ?>
        <div class="item <?php echo $aktif ?>">
		   <a href="#" target="_blank">
		      <img src="<?php echo $row['gambar'] ?>" alt="<?php echo $row['judul'] ?>" title="<?php echo $row['judul'] ?>">
			   <div class="carousel-caption">
			      <h3><?php echo $row['judul'] ?></h3> 
			      <p><?php echo $row['isi'] ?></p>
			   </div>
		   </a>
		</div>
  <?php 
      $x++;
    } // tutup while
  }	// tutup if
   ?>
     </div>
		
	 <a class="left carousel-control" href="#dmbannerhead" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	 <a class="right carousel-control" href="#dmbannerhead" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
   </div>
   </div>
  </div>
</body>
</html>
<?php 
/* tutup koneksinya */
  $database->close();
?>
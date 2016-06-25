<?php error_reporting(E_ALL ^ E_DEPRECATED);
include "koneksi.php";

//pagging
$per_hal=8;
$jumlah_record=mysql_query("SELECT * FROM artikel order by RAND() LIMIT 5");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page=(isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start= ($page - 1) * $per_hal;
//
include "header.php";
	function custom_echo($x, $length)
		{
			  if(strlen($x)<=$length)
			  {
				echo $x;
			  }
			  else
			  {
				$y=substr($x,0,$length) . '...';
				echo $y;
			  }
		}
?>
<div id="content" class="site-content">
	<div class="container main-content-area">
		<div class="techponya row">
			<div id="content" class="main-content-inner col-sm-12 col-md-8 pull-left">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="techponya row main-content-inner">
			<div class="col-md-12">
						<?php 
							$sql = "SELECT * FROM artikel order by id desc LIMIT 1";
							$hasil = mysql_query($sql,$dbconn);
							while ($techponya = mysql_fetch_row($hasil)){
						?>
					<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>">
						<img width="750" height="300" class="single-featured" src="<?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?>" alt="" srcset="<?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?> 300w, <?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?> 750w" sizes="(max-width: 750px) 100vw, 750px">
					</a>
				  <div class="techponya-post-type type-post hentry">
					<h2 class="techponya-page entry-title">
						<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" rel="bookmark"><?php custom_echo($techponya[2], 80); ?></a>
					</h2>
					<div class="entry-meta">
					<!--** Kategori **-->
					<span class="label">
							<a class="label techponya label-info" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
					</span>
					<span class="label">
							<a class="label techponya label-warning" href="<?php echo techponya_url(); ?>">#techponya</a>
					</span>
					<span class="label">
							<a class="label techponya label-success" href="<?php echo techponya_url(); ?>penulis/<?php echo $techponya[7];?>">#<?php echo $techponya[7];?></a>
					</span>
					<!--** Kategori End **-->
						<span class="posted-on">
							<i class="fa fa-calendar"></i> 
							<a href="#" rel="bookmark">
								<time class="entry-date published" datetime="<?php echo $techponya[6];?>T12:55:43+00:00"><?php echo $techponya[6];?></time>
							</a>
						</span>
						<span class="byline"> 
							<i class="fa fa-user"></i> 
								<span class="author vcard">
									<a class="url fn n" href="<?php echo techponya_url(); ?>"><?php echo $techponya[7];?></a>
								</span>
						</span>				
						<span class="view-link">
							<i class="fa fa-eye"></i>
							<a href="<?php echo techponya_url(); ?>"><?php
								$fp = fopen("hits.txt", "r");
								$count = fread($fp, 1024);
								fclose($fp);
								$count = $count + 1;
								echo $count;
								$fp = fopen("hits.txt", "w");
								fwrite($fp, $count);
								fclose($fp);
								?> Views</a>
						</span>
					</div>
				</div>
				<!-- Techponya fadlhymj Widget -->
				<div class="techponya-post-type type-post hentry">
						<div class="techponya row">
							<div class="col-md-12">
								<div class="techponya-panel panel-panel-info">
									<div class="widget-title btn center"> 
												<a href="<?php echo techponya_url(); ?>penulis/<?php echo $techponya[7];?>" class="label btn-success btn-sm">  Author</a>
												Artikel Fadlhy MJ
											</div>
									</div>
							<div class="techponya-konten col-md-6 cta-contents">
									<center>
											<div class="btn center">
												<a href="#" class="label btn-danger btn-sm">TechNews</a>
											</div>
										</center>
									<?php 
											$sql_fadlhymj = "SELECT * FROM artikel WHERE penulis='fadlhymj' and kategori='technews' ORDER BY id DESC LIMIT 1";
											$hasil_fadlhymj = mysql_query($sql_fadlhymj,$dbconn);
											while ($techponya = mysql_fetch_array($hasil_fadlhymj)){ 
										?>
								  <div class="type-post">
										<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>">
										<img class="single-featured" src="<?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?>"  width="500" height="170" alt="<?php custom_echo($techponya[2], 75); ?>">
									</a>
									<h4 class="techponya-page entry-title">
										<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" rel="bookmark"><?php custom_echo($techponya[2], 75); ?></a>
									</h4>
									<span class="label">
										<a class="label techponya label-info" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
									</span>
									<span class="label">
										<a class="label techponya label-warning" href="<?php echo techponya_url(); ?>">#techponya</a>
									</span>
									<span class="label">
										<a class="label techponya label-success" href="<?php echo techponya_url(); ?>penulis/<?php echo $techponya[7];?>">#<?php echo $techponya[7];?></a>
									</span>
								</div>
								<br>
								<?php } ?>
								<aside id="techponya-widget wpp-2" class="widget popular-posts">
									<ul class="wpp-list">
										<?php 
											$sql_fadlhymj_1 = "SELECT * FROM artikel WHERE penulis='fadlhymj' and kategori='technews' ORDER BY id DESC LIMIT 4";
											$hasil_fadlhymj_1 = mysql_query($sql_fadlhymj_1,$dbconn);
											while ($techponya = mysql_fetch_array($hasil_fadlhymj_1)){ 
										?>
										<li><a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php echo $techponya[2];?>" target="_self">
												<img src="<?php echo techponya_url(); ?>thumb.php?src=<?php echo $techponya[4];?>&x=100&y=60&f=0" width="80" height="60" title="<?php echo $techponya[2]; ?>" alt="<?php echo $techponya[2]; ?>" class="wpp-thumbnail wpp_cached_thumb wpp_featured"></a> 
											<h6 class="techponya-page entry-title">
											<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php echo $techponya[2]; ?>" class="wpp-post-title" target="_self"><?php custom_echo($techponya[2], 60); ?></a> 
											</h6>
											<span class="label">
													<a class="label techponya label-info" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
											</span>
											<span class="label">
													<a class="label techponya label-warning" href="<?php echo techponya_url(); ?>">#techponya</a>
											</span>
											<span class="label">
													<a class="label techponya label-success" href="<?php echo techponya_url(); ?>penulis/<?php echo $techponya[7];?>">#<?php echo $techponya[7];?></a>
											</span>
										</li>
										<?php } ?>
									</ul>
								</aside>
							</div>
							<div class="techponya-konten col-md-6 cta-contents">
										<center>
											<div class="btn center">
												<a href="#" class="label btn-warning btn-sm">Tips & Trik</a>
											</div>
										</center>
									<aside id="techponya-widget wpp-2" class="widget popular-posts">
									<ul class="wpp-list">
										<?php 
											$sql_fadlhymj_2 = "SELECT * FROM artikel WHERE penulis='fadlhymj' and kategori='tipstrik' ORDER BY id DESC LIMIT 4";
											$hasil_fadlhymj_2 = mysql_query($sql_fadlhymj_2,$dbconn);
											while ($techponya = mysql_fetch_array($hasil_fadlhymj_2)){ 
										?>
										<li><a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php echo $techponya[2];?>" target="_self">
												<img src="<?php echo techponya_url(); ?>thumb.php?src=<?php echo $techponya[4];?>&x=100&y=60&f=0" width="80" height="60" title="<?php echo $techponya[2]; ?>" alt="<?php echo $techponya[2]; ?>" class="wpp-thumbnail wpp_cached_thumb wpp_featured"></a> 
											<h6 class="techponya-page entry-title">
											<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php echo $techponya[2]; ?>" class="wpp-post-title" target="_self"><?php custom_echo($techponya[2], 60); ?></a> 
											</h6>
											<span class="label">
													<a class="label techponya label-info" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
											</span>
											<span class="label">
													<a class="label techponya label-warning" href="<?php echo techponya_url(); ?>">#techponya</a>
											</span>
											<span class="label">
													<a class="label techponya label-success" href="<?php echo techponya_url(); ?>penulis/<?php echo $techponya[7];?>">#<?php echo $techponya[7];?></a>
											</span>
										</li>
										<?php } ?>
									</ul>
								</aside>
									<?php 
											$sql_fadlhymj = "SELECT * FROM artikel WHERE penulis='fadlhymj' and kategori='tipstrik' ORDER BY id DESC LIMIT 1";
											$hasil_fadlhymj = mysql_query($sql_fadlhymj,$dbconn);
											while ($techponya = mysql_fetch_array($hasil_fadlhymj)){ 
										?>
								  <div class="type-post">
										<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>">
										<img class="single-featured" src="<?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?>"  width="500" height="170" alt="<?php custom_echo($techponya[2], 75); ?>">
									</a>
									<h4 class="techponya-page entry-title">
										<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" rel="bookmark"><?php custom_echo($techponya[2], 75); ?></a>
									</h4>
									<span class="label">
										<a class="label techponya label-info" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
									</span>
									<span class="label">
										<a class="label techponya label-warning" href="<?php echo techponya_url(); ?>">#techponya</a>
									</span>
									<span class="label">
										<a class="label techponya label-success" href="<?php echo techponya_url(); ?>penulis/<?php echo $techponya[7];?>">#<?php echo $techponya[7];?></a>
									</span>
								</div>
								<br>
								<?php } ?>
							</div>
								<center>
									<div class="btn center">
										<a href="<?php echo techponya_url(); ?>penulis/fadlhymj" class="label btn-success btn-sm">More</a>
									</div>
								</center>
						 </div>
					</div>
			</div>
			<!-- Techponya fadlhymj Widget -->
			
			<!-- Techponya Kategori Widget -->
				<div class="techponya-post-type type-post hentry">
						<div class="techponya row">
							<div class="col-md-12">
							<div class="techponya-konten col-md-6 cta-contents">
								<div class="techponya-panel panel-panel-info">
									<div class="widget-title btn center"> 
											<a href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>" class="label btn-danger btn-sm">  Kategori</a>
											Tech News 
									</div>
								</div>
									<?php 
											$sql1 = "SELECT * FROM artikel WHERE kategori='technews' ORDER BY id DESC LIMIT 1";
											$hasil1 = mysql_query($sql1,$dbconn);
											while ($techponya = mysql_fetch_array($hasil1)){ 
										?>
								  <div class="type-post">
										<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>">
										<img class="single-featured" src="<?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?>"  width="500" height="170" alt="<?php custom_echo($techponya[2], 75); ?>">
									</a>
									<h4 class="techponya-page entry-title">
										<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" rel="bookmark"><?php custom_echo($techponya[2], 75); ?></a>
									</h4>
									<span class="label">
										<a class="label techponya label-danger" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
									</span>
									<span class="label">
										<a class="label techponya label-warning" href="<?php echo techponya_url(); ?>">#techponya</a>
									</span>
									<span class="label">
										<a class="label techponya label-success" href="<?php echo techponya_url(); ?>penulis/<?php echo $techponya[7];?>">#<?php echo $techponya[7];?></a>
									</span>
								</div>
								<br>
								<?php } ?>
									<aside id="techponya-widget wpp-2" class="widget popular-posts">
									<ul class="wpp-list">
										<?php 
											$sql2 = "SELECT * FROM artikel WHERE kategori='technews' ORDER BY id DESC LIMIT 5";
											$hasil2 = mysql_query($sql2,$dbconn);
											while ($techponya = mysql_fetch_array($hasil2)){ 
										?>
										<li><a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php echo $techponya[2];?>" target="_self">
												<img src="<?php echo techponya_url(); ?>thumb.php?src=<?php echo $techponya[4];?>&x=150&y=100&f=0" width="100" height="60" title="<?php echo $techponya[2]; ?>" alt="<?php echo $techponya[2]; ?>" class="wpp-thumbnail wpp_cached_thumb wpp_featured"></a> 
											<h6 class="techponya-page entry-title">
											<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php echo $techponya[2]; ?>" class="wpp-post-title" target="_self"><?php custom_echo($techponya[2], 58); ?></a> 
											</h6>
											<span class="label">
													<a class="label techponya label-danger" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
											</span>
											<span class="label">
													<a class="label techponya label-warning" href="<?php echo techponya_url(); ?>">#techponya</a>
											</span>
											<span class="label">
													<a class="label techponya label-success" href="<?php echo techponya_url(); ?>penulis/<?php echo $techponya[7];?>">#<?php echo $techponya[7];?></a>
											</span>
										</li>
										<?php } ?>
									</ul>
										<center>
											<div class="btn center">
												<a href="<?php echo techponya_url(); ?>kategori/technews" class="label btn-danger btn-sm">More</a>
											</div>
										</center>
								</aside>
							</div>
							<div class="techponya-konten col-md-6 cta-contents">
								<div class="techponya-panel panel-panel-info">
									<div class="widget-title btn center"> 
											<a href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>" class="label btn-info btn-sm">  Kategori</a>
											Tips & Trik
									</div>
								</div>
									<?php 
											$sql1 = "SELECT * FROM artikel WHERE kategori='tipstrik' ORDER BY id DESC LIMIT 1";
											$hasil1 = mysql_query($sql1,$dbconn);
											while ($techponya = mysql_fetch_array($hasil1)){ 
										?>
								  <div class="type-post">
										<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>">
										<img class="single-featured" src="<?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?>"  width="500" height="170" alt="<?php custom_echo($techponya[2], 75); ?>">
									</a>
									<h4 class="techponya-page entry-title">
										<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" rel="bookmark"><?php custom_echo($techponya[2], 75); ?></a>
									</h4>
									<span class="label">
										<a class="label techponya label-info" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
									</span>
									<span class="label">
										<a class="label techponya label-warning" href="<?php echo techponya_url(); ?>">#techponya</a>
									</span>
									<span class="label">
										<a class="label techponya label-success" href="<?php echo techponya_url(); ?>penulis/<?php echo $techponya[7];?>">#<?php echo $techponya[7];?></a>
									</span>
								</div>
								<br>
								<?php } ?>
									<aside id="techponya-widget wpp-2" class="widget popular-posts">
									<ul class="wpp-list">
										<?php 
											$sql2 = "SELECT * FROM artikel WHERE kategori='tipstrik' ORDER BY id DESC LIMIT 5";
											$hasil2 = mysql_query($sql2,$dbconn);
											while ($techponya = mysql_fetch_array($hasil2)){ 
										?>
										<li><a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php echo $techponya[2];?>" target="_self">
												<img src="<?php echo techponya_url(); ?>thumb.php?src=<?php echo $techponya[4];?>&x=150&y=100&f=0" width="100" height="60" title="<?php echo $techponya[2]; ?>" alt="<?php echo $techponya[2]; ?>" class="wpp-thumbnail wpp_cached_thumb wpp_featured"></a> 
											<h6 class="techponya-page entry-title">
											<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php echo $techponya[2]; ?>" class="wpp-post-title" target="_self"><?php custom_echo($techponya[2], 58); ?></a> 
											</h6>
											<span class="label">
													<a class="label techponya label-info" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
											</span>
											<span class="label">
													<a class="label techponya label-warning" href="<?php echo techponya_url(); ?>">#techponya</a>
											</span>
											<span class="label">
													<a class="label techponya label-success" href="<?php echo techponya_url(); ?>penulis/<?php echo $techponya[7];?>">#<?php echo $techponya[7];?></a>
											</span>
										</li>
										<?php } ?>
									</ul>
										<center>
											<div class="btn center">
												<a href="<?php echo techponya_url(); ?>kategori/tipstrik" class="label btn-success btn-sm">More</a>
											</div>
										</center>
								</aside>
							</div>
						 </div>
					</div>
			</div>
			<!-- Techponya Kategori Widget -->
			
			<!-- Techponya Penulis Widget -->
				<div class="techponya-post-type type-post hentry">
						<div class="techponya row">
							<div class="col-md-12">
								<div class="techponya-panel panel-panel-info">
									<div class="widget-title btn center"> 
												<a href="<?php echo techponya_url(); ?>penulis/<?php echo $techponya[7];?>" class="label btn-success btn-sm">  Author</a>
												Penulis Techponya 
											</div>
									</div>
							<div class="techponya-konten col-md-6 cta-contents">
									<?php 
											$sql1 = "SELECT * FROM artikel order by RAND() LIMIT 2";
											$hasil1 = mysql_query($sql1,$dbconn);
											while ($techponya = mysql_fetch_array($hasil1)){ 
										?>
								  <div class="type-post">
										<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>">
										<img class="single-featured" src="<?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?>"  width="500" height="170" alt="<?php custom_echo($techponya[2], 75); ?>">
									</a>
									<h4 class="techponya-page entry-title">
										<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" rel="bookmark"><?php custom_echo($techponya[2], 75); ?></a>
									</h4>
									<span class="label">
										<a class="label techponya label-info" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
									</span>
									<span class="label">
										<a class="label techponya label-warning" href="<?php echo techponya_url(); ?>">#techponya</a>
									</span>
									<span class="label">
										<a class="label techponya label-success" href="<?php echo techponya_url(); ?>penulis/<?php echo $techponya[7];?>">#<?php echo $techponya[7];?></a>
									</span>
								</div>
								<br>
								<?php } ?>
							</div>
							<div class="techponya-konten col-md-6 cta-contents">
									<aside id="techponya-widget wpp-2" class="widget popular-posts">
									<ul class="wpp-list">
										<?php 
											$sql2 = "SELECT * FROM artikel order by RAND() LIMIT 7";
											$hasil2 = mysql_query($sql2,$dbconn);
											while ($techponya = mysql_fetch_array($hasil2)){ 
										?>
										<li><a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php echo $techponya[2];?>" target="_self">
												<img src="<?php echo techponya_url(); ?>thumb.php?src=<?php echo $techponya[4];?>&x=100&y=60&f=0" width="80" height="60" title="<?php echo $techponya[2]; ?>" alt="<?php echo $techponya[2]; ?>" class="wpp-thumbnail wpp_cached_thumb wpp_featured"></a> 
											<h6 class="techponya-page entry-title">
											<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php echo $techponya[2]; ?>" class="wpp-post-title" target="_self"><?php custom_echo($techponya[2], 60); ?></a> 
											</h6>
											<span class="label">
													<a class="label techponya label-info" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
											</span>
											<span class="label">
													<a class="label techponya label-warning" href="<?php echo techponya_url(); ?>">#techponya</a>
											</span>
											<span class="label">
													<a class="label techponya label-success" href="<?php echo techponya_url(); ?>penulis/<?php echo $techponya[7];?>">#<?php echo $techponya[7];?></a>
											</span>
										</li>
										<?php } ?>
									</ul>
										<center>
											<div class="btn center">
												<a href="<?php echo techponya_url(); ?>penulis/fadlhymj" class="label btn-success btn-sm">More</a>
											</div>
										</center>
								</aside>
							</div>
						 </div>
					</div>
			</div>
			<?php } ?>
			<!-- Techponya Penulis Widget -->
					<?php
					$query=mysql_query("SELECT * FROM artikel order by id DESC LIMIT $start, $per_hal");
					while ($techponya = mysql_fetch_array($query)){
					?>
				<div class="col-md-6 portfolio-item">
					<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>">
						<img class="single-featured" src="<?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?>"  width="500" height="170" alt="<?php custom_echo($techponya[2], 75); ?>">
					</a>
				  <div class="techponya-post-type type-post hentry">
					<h4 class="techponya-page entry-title">
						<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" rel="bookmark"><?php custom_echo($techponya[2], 70); ?></a>
					</h4>
					<span class="posted-on">
							<i class="fa fa-calendar"></i> 
								<time class="entry-date published" datetime="<?php echo $techponya[6];?>"><small><?php echo $techponya[6];?></small></time>
							</a>
						</span>
					<span class="label">
							<a class="label techponya label-info" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
					</span>
					<span class="label">
							<a class="label techponya label-warning" href="<?php echo techponya_url(); ?>">#techponya</a>
					</span>
					<span class="label">
							<a class="label techponya label-success" href="<?php echo techponya_url(); ?>penulis/<?php echo $techponya[7];?>">#<?php echo $techponya[7];?></a>
					</span>
				</div>
				</div>
				<?php } ?>
			</div>
		</main>
	</div>
</div>
			<?php include_once "widget.php" ?>
		</div>
		</div>
	</div>
	</div>
		<?php include "footer.php" ?>
<a href="javascript:void(0);" title="SumoMe" style="position: fixed; z-index: 2147483647; padding: 0px; width: 44px; height: 40px; text-indent: -10000px; display: none !important; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpBNjE1OTIxRTcwNzUxMUUzQkUxRkIxNEU0NUM0RjM4OCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpBNjE1OTIxRjcwNzUxMUUzQkUxRkIxNEU0NUM0RjM4OCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkUzQjQyQzRENzA3NDExRTNCRTFGQjE0RTQ1QzRGMzg4IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkUzQjQyQzRFNzA3NDExRTNCRTFGQjE0RTQ1QzRGMzg4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+t9pejAAAAWRJREFUeNrslz1Lw1AUhhOlYhXFiEt/gIigm+isg5sOjs7+D/+HY91ENxGRxFLxY+zWSRCdHMQ6OTgYnwsnEEppTtMEAp4DL29yuefcJ/fk9sOP49irckx4FQ8DNEADNEADNMD/CvjV6x0j9QMwdx11nY+Q47t18u7gMjqlQE0Dh92iVefcbyhyJrETtJIXMEKH6IJi0wq4JRlyHjG+lQHXREeSmxvQxR66ouicAi6JeYHcGZAzhZ3Jw6fXGQ1wIQjesGe53UYhxRcVcEnMokvm7fbBnaMDGXplnZdxTnGYut5EbRZpSPvaQ+CSqAvkPprh+lo6Mqh+LsD+7V9DD+gGBcrDWpNde5ROpKOVlewP+08iLf1w80r6mGvQ4vfcO0jyJ9YpCa6bBaf9JolKAmxpJmkAw5IAw6IA79FPwXC/6K4QQN6Tb+ypYMCOvN/eWKfYfm4ZoAEaoAEaoAEaYOUB/wQYAATRi8cPOM7SAAAAAElFTkSuQmCC&quot;); background-color: rgb(15, 82, 186); background-position-x: 4px; background-repeat: no-repeat;"></a>
</body>
</html>
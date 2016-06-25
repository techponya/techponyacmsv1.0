<?php 
include "koneksi.php";
?>
<div id="secondary" class="widget-area col-sm-12 col-md-4" role="complementary">
<div class="well">
</aside>
<aside id="wpp-2" class="widget popular-posts">
<h3 class="widget-title">Artikel Menarik</h3>
	<ul class="wpp-list">
		<?php 
			$sql1 = "SELECT * FROM artikel order by RAND() LIMIT 10";
			$hasil1 = mysql_query($sql1,$dbconn);
			while ($techponya = mysql_fetch_array($hasil1)){ 
		?>
		<li><a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php echo $techponya[2];?>" target="_self">
				<img src="<?php echo techponya_url(); ?>thumb.php?src=<?php echo $techponya[4];?>&x=100&y=60&f=0" width="60" height="60" title="<?php echo $techponya[2]; ?>" alt="<?php echo $techponya[2]; ?>" class="wpp-thumbnail wpp_cached_thumb wpp_featured"></a> 
			<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php echo $techponya[2]; ?>" class="wpp-post-title" target="_self"><?php custom_echo($techponya[2], 75); ?></a> 
			<span class="label">
				<a class="label label-info" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
			</span>
		</li>
		<?php } ?>
	</ul>
</aside>
</div>
<div class="well">
<aside id="wpp-2" class="widget popular-posts">
	<ul class="wpp-list">
										<?php 
											$sql_fadlhymj_1 = "SELECT * FROM artikel WHERE penulis='fadlhymj' and kategori='technews' ORDER BY id DESC LIMIT 4";
											$hasil_fadlhymj_1 = mysql_query($sql_fadlhymj_1,$dbconn);
											while ($techponya = mysql_fetch_array($hasil_fadlhymj_1)){ 
										?>
										<li><a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php echo $techponya[2];?>" target="_self">
												<img src="<?php echo techponya_url(); ?>thumb.php?src=<?php echo $techponya[4];?>&x=100&y=60&f=0" width="80" height="60" title="<?php echo $techponya[2]; ?>" alt="<?php echo $techponya[2]; ?>" class="wpp-thumbnail wpp_cached_thumb wpp_featured"></a> 
											<h6 class="entry-title">
											<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php echo $techponya[2]; ?>" class="wpp-post-title" target="_self"><?php custom_echo($techponya[2], 60); ?></a> 
											</h6>
											<span class="label">
													<a class="label label-info" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
											</span>
											<span class="label">
													<a class="label label-info" href="<?php echo techponya_url(); ?>">#techponya</a>
											</span>
											<span class="label">
													<a class="label label-success" href="<?php echo techponya_url(); ?>penulis/<?php echo $techponya[7];?>">#<?php echo $techponya[7];?></a>
											</span>
										</li>
										<?php } ?>
									</ul>
</aside>
</div>
<div class="well">
<aside id="popular-themes-2" class="widget popular-themes"><h3 class="widget-title">Random Post</h3>
    <div class="popular-themes sticky-sidebar-popular-themes">
	<ul>
		<?php
			$sql = "SELECT * FROM artikel order by RAND() LIMIT 2";
			$hasil = mysql_query($sql,$dbconn);
			while ($techponya = mysql_fetch_array($hasil)){
		?>
		<li class="theme_item"><a class="theme_img" href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php custom_echo($techponya[2], 75); ?>">
			<img src="<?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?>" alt="<?php custom_echo($techponya[2], 75); ?>" width="350" height="140">
			<a class="theme_title" href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php custom_echo($techponya[2], 75); ?>"><?php custom_echo($techponya[2], 75); ?></a>
		</li>
		<?php } ?>
	</ul>
    </div><!-- end social icons -->
</div>
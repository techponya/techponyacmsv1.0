<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
include "koneksi.php";
	$id = $_GET['id'];
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
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-8 pull-left">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="row main-content-inner">
			<div class="col-md-12">
					<!-- Software Widget -->
				<div class="panel panel-success">
					<div class="panel-heading">
					  <h3 class="panel-title breadcrumb">
					 <li><a href="#"><span class="fa fa-home"> </span></a></li>    
					 <li><a href="#"><span class="fa fa-newspaper-o"> </span> Projects</a></li>
					</h3>
					</div>
					<div class="panel-body">
					  <div class="row">
						<div class=" col-md-9 col-lg-6 "> 
						  <table class="table table-user-information">
							<tbody>
							  <tr>
								<?php 
									$sql1 = "SELECT * FROM artikel order by RAND() LIMIT 5";
									$hasil1 = mysql_query($sql1,$dbconn);
									while ($techponya = mysql_fetch_array($hasil1)){ 
								?>
								<td>
									<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php echo $techponya[2];?>" target="_self">
										<img src="<?php echo techponya_url(); ?>thumb.php?src=<?php echo $techponya[4];?>&x=200&y=150&f=0" width="150" height="100" title="<?php echo $techponya[2]; ?>" alt="<?php echo $techponya[2]; ?>" class="single-featured wpp-thumbnail wpp_cached_thumb wpp_featured"></a> 
									<h5 class="entry-title">
									<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php echo $techponya[2]; ?>" class="wpp-post-title" target="_self"><?php custom_echo($techponya[2], 100); ?></a> 
									</h5>
									<span class="label">
										<a class="label label-info" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
									</span>
								</td>
							  </tr>
							  <?php } ?>
							</tbody>
						  </table>
						</div>
						<div class=" col-md-9 col-lg-6 "> 
						  <table class="table table-user-information">
							<tbody>
							  <tr>
								<?php 
									$sql1 = "SELECT * FROM artikel order by RAND() LIMIT 5";
									$hasil1 = mysql_query($sql1,$dbconn);
									while ($techponya = mysql_fetch_array($hasil1)){ 
								?>
								<td>
									<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php echo $techponya[2];?>" target="_self">
										<img src="<?php echo techponya_url(); ?>thumb.php?src=<?php echo $techponya[4];?>&x=200&y=150&f=0" width="150" height="100" title="<?php echo $techponya[2]; ?>" alt="<?php echo $techponya[2]; ?>" class="single-featured wpp-thumbnail wpp_cached_thumb wpp_featured"></a> 
									<h5 class="entry-title">
									<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" title="<?php echo $techponya[2]; ?>" class="wpp-post-title" target="_self"><?php custom_echo($techponya[2], 100); ?></a> 
									</h5>
									<span class="label">
										<a class="label label-info" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
									</span>
								</td>
							  </tr>
							  <?php } ?>
							</tbody>
						  </table>
						</div>
					  </div>
					</div>
				  </div>
					<!-- Software End -->
					<?php
							$sql1 = "SELECT * FROM artikel WHERE kategori='$id' ORDER BY id DESC LIMIT 8";
							$hasil1 = mysql_query($sql1,$dbconn);
							while ($techponya = mysql_fetch_array($hasil1)){
					?>
				<div class="col-md-6 portfolio-item">
					<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[0];?>">
						<img width="360" height="150" class="single-featured" src="<?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?>" alt="<?php custom_echo($techponya[2], 75); ?>" srcset="<?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?> 150w, <?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?> 360w" sizes="(max-width: 360px) 100vw, 360px">
					</a>
				  <div class="type-post hentry">
					<h4 class="entry-title">
						<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[0];?>" rel="bookmark"><?php custom_echo($techponya[2], 75); ?></a>
					</h4>
					<span class="posted-on">
							<i class="fa fa-calendar"></i> 
								<time class="entry-date published" datetime="<?php echo $techponya[6];?>"><small><?php echo $techponya[6];?></small></time>
							</a>
						</span>
					<span class="label">
							<a class="label label-info" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
					</span>
					<span class="label">
							<a class="label label-info" href="#">#techponya</a>
					</span>
					<span class="label">
							<a class="label label-success" href="<?php echo techponya_url(); ?>penulis/<?php echo $techponya[7];?>">#<?php echo $techponya[7];?></a>
					</span>
				</div>
				</div>
				<?php } ?>
			</div>
				<div class="more_themes center">
						<a href="#" class="btn btn-primary btn-sm">View more »</a>
				</div>
		</main>
	</div>
</div>
			<?php include "widget.php" ?>
		</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
	</div><!-- close .main-content -->
		<?php include "footer.php" ?>
<a href="javascript:void(0);" title="SumoMe" style="position: fixed; z-index: 2147483647; padding: 0px; width: 44px; height: 40px; text-indent: -10000px; display: none !important; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpBNjE1OTIxRTcwNzUxMUUzQkUxRkIxNEU0NUM0RjM4OCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpBNjE1OTIxRjcwNzUxMUUzQkUxRkIxNEU0NUM0RjM4OCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkUzQjQyQzRENzA3NDExRTNCRTFGQjE0RTQ1QzRGMzg4IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkUzQjQyQzRFNzA3NDExRTNCRTFGQjE0RTQ1QzRGMzg4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+t9pejAAAAWRJREFUeNrslz1Lw1AUhhOlYhXFiEt/gIigm+isg5sOjs7+D/+HY91ENxGRxFLxY+zWSRCdHMQ6OTgYnwsnEEppTtMEAp4DL29yuefcJ/fk9sOP49irckx4FQ8DNEADNEADNMD/CvjV6x0j9QMwdx11nY+Q47t18u7gMjqlQE0Dh92iVefcbyhyJrETtJIXMEKH6IJi0wq4JRlyHjG+lQHXREeSmxvQxR66ouicAi6JeYHcGZAzhZ3Jw6fXGQ1wIQjesGe53UYhxRcVcEnMokvm7fbBnaMDGXplnZdxTnGYut5EbRZpSPvaQ+CSqAvkPprh+lo6Mqh+LsD+7V9DD+gGBcrDWpNde5ROpKOVlewP+08iLf1w80r6mGvQ4vfcO0jyJ9YpCa6bBaf9JolKAmxpJmkAw5IAw6IA79FPwXC/6K4QQN6Tb+ypYMCOvN/eWKfYfm4ZoAEaoAEaoAEaYOUB/wQYAATRi8cPOM7SAAAAAElFTkSuQmCC&quot;); background-color: rgb(15, 82, 186); background-position-x: 4px; background-repeat: no-repeat;"></a>
</body>
</html>
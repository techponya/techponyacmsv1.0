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
				  <div class="panel panel-success">
					<div class="panel-heading">
					  <h3 class="panel-title">Sheena Kristin A.Eschor</h3>
					</div>
					<div class="panel-body">
					  <div class="row">
						<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/13012802_535782219937820_6780896242052911780_n.jpg?oh=2b85165b3a9dbb08797b901dab5cecae&oe=57D9561A" class="img-circle img-responsive"> </div>
						<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
						  <dl>
							<dt>DEPARTMENT:</dt>
							<dd>Administrator</dd>
							<dt>HIRE DATE</dt>
							<dd>11/12/2013</dd>
							<dt>DATE OF BIRTH</dt>
							   <dd>11/12/2013</dd>
							<dt>GENDER</dt>
							<dd>Male</dd>
						  </dl>
						</div>
						<div class=" col-md-9 col-lg-9 "> 
						  <table class="table table-user-information">
							<tbody>
							  <tr>
								<td>Department:</td>
								<td>Programming</td>
							  </tr>
							  <tr>
								<td>Hire date:</td>
								<td>06/23/2013</td>
							  </tr>
							  <tr>
								<td>Date of Birth</td>
								<td>01/24/1988</td>
							  </tr>
						   
								 <tr>
									 <tr>
								<td>Gender</td>
								<td>Male</td>
							  </tr>
								<tr>
								<td>Home Address</td>
								<td>Metro Manila,Philippines</td>
							  </tr>
							  <tr>
								<td>Email</td>
								<td><a href="mailto:info@support.com">info@support.com</a></td>
							  </tr>
								<td>Phone Number</td>
								<td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
								</td>
								   
							  </tr>
							 
							</tbody>
						  </table>
						</div>
					  </div>
					</div>
				  </div>
					<?php 
							$sql = "SELECT * FROM artikel WHERE penulis='$id' ORDER BY id DESC LIMIT 1";
							$hasil = mysql_query($sql,$dbconn);
							while ($techponya = mysql_fetch_row($hasil)){
						?>
					<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[0];?>">
						<img width="750" height="300" class="single-featured" src="<?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?>" alt="" srcset="<?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?> 300w, <?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?> 750w" sizes="(max-width: 750px) 100vw, 750px">
					</a>
				  <div class="type-post hentry">
					<h2 class="entry-title">
						<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[0];?>" rel="bookmark"><?php custom_echo($techponya[2], 60); ?></a>
					</h2>
					<div class="entry-meta">
					<!--** Kategori, Penulis **-->
					<span class="label">
							<a class="label label-info" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
					</span>
					<span class="label">
							<a class="label label-info" href="<?php echo techponya_url(); ?>">#techponya</a>
					</span>
					<span class="label">
							<a class="label label-success" href="<?php echo techponya_url(); ?>penulis/<?php echo $techponya[7];?>">#<?php echo $techponya[7];?></a>
					</span>
					<!--** Kategori, Penulis End **-->
						<span class="posted-on">
							<i class="fa fa-calendar"></i> 
							<a href="#" rel="bookmark">
								<time class="entry-date published" datetime="2015-05-30T12:55:43+00:00"><?php echo $techponya[6];?></time>
							</a>
						</span>
						<span class="byline"> 
							<i class="fa fa-user"></i> 
								<span class="author vcard">
									<a class="url fn n" href="<?php echo techponya_url(); ?>"><?php echo $techponya[7];?></a>
								</span>
						</span>				
						<span class="comments-link">
							<i class="fa fa-comment-o"></i>
							<a href="<?php echo techponya_url(); ?>"><?php
								$fp = fopen("hits.txt", "r");
								$count = fread($fp, 1024);
								fclose($fp);
								$count = $count + 1;
								echo $count;
								$fp = fopen("hits.txt", "w");
								fwrite($fp, $count);
								fclose($fp);
								?> View</a>
						</span>
					</div>
				</div>
			</div>
			<?php } ?>
					<!-- Software Widget -->
			
					<!-- Software End -->
					<?php
							$sql1 = "SELECT * FROM artikel WHERE penulis='$id' ORDER BY id DESC LIMIT 8";
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
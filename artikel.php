<?php 
include "koneksi.php"; 
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
					<?php
					$idartikel = $_GET['id'];
					$hasil = mysql_query("select * from artikel where seo_title='$idartikel' ORDER BY ID DESC ");
					$techponya = mysql_fetch_array($hasil);
					?>
					<a href="#">
						<img width="750" height="300" class="single-featured" src="<?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?>" alt="" srcset="<?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?> 300w, <?php echo techponya_url(); ?>userfiles/konten/<?php echo $techponya[4];?> 750w" sizes="(max-width: 750px) 100vw, 750px">
					</a>
				  <div class="type-post hentry">
					<h2 class="entry-title">
						<a href="<?php echo techponya_url(); ?>artikel/<?php echo $techponya[5];?>" rel="bookmark"><a href="#"><?php echo $techponya[2];?></a>
					</h2>
					<div class="entry-meta">
						<span class="posted-on">
							<i class="fa fa-calendar"></i> 
							<a href="#" rel="bookmark">
								<time class="entry-date published" datetime="<?php echo $techponya[2];?>T12:55:43+00:00"><?php echo $techponya[6];?></time>
							</a>
						</span>
						<span class="byline"> 
							<i class="fa fa-user"></i> 
								<span class="author vcard">
									<a class="url fn n" href="#"><?php echo $techponya[7];?></a>
								</span>
						</span>
					</div>
					<p><?php echo $techponya[3];?></p>
					<hr>
					<!--** Kategori **-->
					<div class="entry-meta">
					<span class="label">
							<a class="label label-info" href="<?php echo techponya_url(); ?>kategori/<?php echo $techponya[1];?>">#<?php echo $techponya[1];?></a>
					</span>
					<span class="label">
							<a class="label label-info" href="#">#techponya</a>
					</span>
					<span class="label">
							<a class="label label-success" href="<?php echo techponya_url(); ?>penulis/<?php echo $data['penulis']?>">#<?php echo $techponya[7];?></a>
					</span>
					</div>
					<!--** Kategori End **-->
					<hr>
					<h4 class="entry-title">Artikel Terkait</h4>
					<?php
					 include "widget/artikelTerkait.php";
					 artikelTerkait($idartikel);
				   ?>
				   <div id="disqus_thread"></div>
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
     */
    /*
    var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() {  // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        
        s.src = '//techponya.disqus.com/embed.js';
        
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
				</div>
			</div>
			</div>
		</main>
	</div>
</div>
		<?php
			include "widget/widget.php";
		?>
		</div>
			<!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
	</div><!-- close .main-content -->
		<?php include "widget/footer.php" ?>
	    <script id="dsq-count-scr" src="//techponya.disqus.com/count.js" async></script>
<a href="javascript:void(0);" title="SumoMe" style="position: fixed; z-index: 2147483647; padding: 0px; width: 44px; height: 40px; text-indent: -10000px; display: none !important; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpBNjE1OTIxRTcwNzUxMUUzQkUxRkIxNEU0NUM0RjM4OCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpBNjE1OTIxRjcwNzUxMUUzQkUxRkIxNEU0NUM0RjM4OCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkUzQjQyQzRENzA3NDExRTNCRTFGQjE0RTQ1QzRGMzg4IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkUzQjQyQzRFNzA3NDExRTNCRTFGQjE0RTQ1QzRGMzg4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+t9pejAAAAWRJREFUeNrslz1Lw1AUhhOlYhXFiEt/gIigm+isg5sOjs7+D/+HY91ENxGRxFLxY+zWSRCdHMQ6OTgYnwsnEEppTtMEAp4DL29yuefcJ/fk9sOP49irckx4FQ8DNEADNEADNMD/CvjV6x0j9QMwdx11nY+Q47t18u7gMjqlQE0Dh92iVefcbyhyJrETtJIXMEKH6IJi0wq4JRlyHjG+lQHXREeSmxvQxR66ouicAi6JeYHcGZAzhZ3Jw6fXGQ1wIQjesGe53UYhxRcVcEnMokvm7fbBnaMDGXplnZdxTnGYut5EbRZpSPvaQ+CSqAvkPprh+lo6Mqh+LsD+7V9DD+gGBcrDWpNde5ROpKOVlewP+08iLf1w80r6mGvQ4vfcO0jyJ9YpCa6bBaf9JolKAmxpJmkAw5IAw6IA79FPwXC/6K4QQN6Tb+ypYMCOvN/eWKfYfm4ZoAEaoAEaoAEaYOUB/wQYAATRi8cPOM7SAAAAAElFTkSuQmCC&quot;); background-color: rgb(15, 82, 186); background-position-x: 4px; background-repeat: no-repeat;"></a>
</body>
</html>
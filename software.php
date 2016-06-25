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
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-8 pull-left">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="row main-content-inner">
				<div class="col-md-12">
					<div class="panel-body type-post hentry col-md-6">
							<table class="table table-striped table-bordered table-list">
							 <tbody>
								<tr>
									<td>Judul</td>
								</tr>
									<br>
								<tr>
									<td>Judul</td>
								</tr>
							 </tbody>
							 <table class="table table-striped table-bordered table-list">
							 <tbody>
								<tr>
									<td>Judul</td>
								</tr>
									<br>
								<tr>
									<td>Judul</td>
								</tr>
							 </tbody>
						  </table>
						  </table>
						  </div>
						<div class="panel-body col-md-6">
						<div class="type-post hentry">
								<h2 class="entry-title">
									Software
								</h2>
							<table class="table table-striped table-bordered table-list">
							 <tbody>
								<tr>
									<td>Judul</td>
								</tr>
									<br>
								<tr>
									<td>Judul</td>
								</tr>
							 </tbody>
						  </table>
						  </div>
					</div>
				</div>
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
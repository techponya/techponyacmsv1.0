<footer>
	<div class="container footerWrap">
		<div class="row">
			<div class="col-xs-12 col-sm-3">
							<h4>
								<a href="<?php echo techponya_url(); ?>konten/aboutus">Mengenai Kami</a>
							</h4>
						<ul class="list-unstyled">
							<li><a href="<?php echo techponya_url(); ?>user">Konstributor</a></li>
							<li><a href="<?php echo techponya_url(); ?>author/fadlhymj">Fadlhy MJ</a></li>
							<li><a href="<?php echo techponya_url(); ?>author/nurulfajar">Nurul Fajar</a></li>
							<li><a href="<?php echo techponya_url(); ?>author/mhmmdnurfauzi">Mhmmd Nur Fauzi</a></li>
						</ul>
				</div>
				<div class="col-xs-12 col-sm-3">
					<h4>Kategori</h4>
					<ul class="list-unstyled">
						<li><a href="<?php echo techponya_url(); ?>software">Software</a></li>
						<li><a href="<?php echo techponya_url(); ?>games">Games</a></li>
						<li><a href="<?php echo techponya_url(); ?>kategori/technews">Tech News</a></li>
						<li><a href="<?php echo techponya_url(); ?>kategori/tipstrik">Tips & Trik</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-3">
					<h4>All</h4>
					<ul class="list-unstyled">
						<li><a href="<?php echo techponya_url(); ?>kategori/lifestyle" target="_blank"></a>Life Style</li>
						<li><a href="<?php echo techponya_url(); ?>gadget"></a>Gadget</li>
						<li><a href="<?php echo techponya_url(); ?>lucu"></a>Lucu</li>
						<li><a href="<?php echo techponya_url(); ?>kategori/tutorial"></a>Tutorial</li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-3">
					<h4>Social</h4>
					<ul class="list-unstyled">
						<li><a href="https://www.facebook.com/techponya" target="_blank">Facebook</a></li>
						<li><a href="https://twitter.com/techponya" target="_blank">Twitter</a></li>
						<li><a href="https://www.youtube.com/channel/UC0oOmcnhdXm_R6V18Se33Ag" target="_blank">YouTube</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="subFooter">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="pull-left">
						© 2016 <a href="#" target="_blank">Techponya CMS Indonesia</a> / 
						<a href="<?php echo techponya_url(); ?>/licenses">Licenses</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script src="./Morphing Buttons Concept _ Demo 1_files/classie.js"></script>
		<script src="./Morphing Buttons Concept _ Demo 1_files/uiMorphingButton_fixed.js"></script>
		<script>
			(function() {
				var docElem = window.document.documentElement, didScroll, scrollPosition;

				// trick to prevent scrolling when opening/closing button
				function noScrollFn() {
					window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
				}

				function noScroll() {
					window.removeEventListener( 'scroll', scrollHandler );
					window.addEventListener( 'scroll', noScrollFn );
				}

				function scrollFn() {
					window.addEventListener( 'scroll', scrollHandler );
				}

				function canScroll() {
					window.removeEventListener( 'scroll', noScrollFn );
					scrollFn();
				}

				function scrollHandler() {
					if( !didScroll ) {
						didScroll = true;
						setTimeout( function() { scrollPage(); }, 60 );
					}
				};

				function scrollPage() {
					scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
					didScroll = false;
				};

				scrollFn();

				[].slice.call( document.querySelectorAll( '.morph-button' ) ).forEach( function( bttn ) {
					new UIMorphingButton( bttn, {
						closeEl : '.icon-close',
						onBeforeOpen : function() {
							// don't allow to scroll
							noScroll();
						},
						onAfterOpen : function() {
							// can scroll again
							canScroll();
						},
						onBeforeClose : function() {
							// don't allow to scroll
							noScroll();
						},
						onAfterClose : function() {
							// can scroll again
							canScroll();
						}
					} );
				} );

				// for demo purposes only
				[].slice.call( document.querySelectorAll( 'form button' ) ).forEach( function( bttn ) { 
					bttn.addEventListener( 'click', function( ev ) { ev.preventDefault(); } );
				} );
			})();
		</script>
		<!-- For the demo ad only -->   
<script src="http://tympanus.net/codrops/adpacks/demoad.js"></script>
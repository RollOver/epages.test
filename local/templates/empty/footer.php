<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

if(ERROR_404 != 'Y'){
?>
<!-- Footer -->
<div id="footer">
	<div class="container">
		<div class="row">
			<div class="6u">
				<section>
					<header>
						<h2>Elementum facilisis</h2>
					</header>
					<a href="#" class="image full"><img src="<?=SITE_TEMPLATE_PATH?>/images/pics05.jpg" alt=""></a>
					<p>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum.</p>
				</section>
			</div>
			<div id="fbox1" class="3u">
				<section>
					<header>
						<h2>Praesent mattis</h2>
					</header>
					<ul class="default">
						<li class="fa fa-angle-right"><a href="#">Vestibulum luctus venenatis dui</a></li>
						<li class="fa fa-angle-right"><a href="#">Integer rutrum nisl in mi</a></li>
						<li class="fa fa-angle-right"><a href="#">Etiam malesuada rutrum enim</a></li>
						<li class="fa fa-angle-right"><a href="#">Aenean elementum facilisis ligula</a></li>
						<li class="fa fa-angle-right"><a href="#">Ut tincidunt elit vitae augue</a></li>
						<li class="fa fa-angle-right"><a href="#">Sed quis odio sagittis leo vehicula</a></li>
					</ul>
				</section>
			</div>
			<div id="fbox2" class="3u">
				<section>
					<header>
						<h2>Maecenas luctus</h2>
					</header>
					<ul class="default">
						<li class="fa fa-angle-right"><a href="#">Vestibulum luctus venenatis dui</a></li>
						<li class="fa fa-angle-right"><a href="#">Integer rutrum nisl in mi</a></li>
						<li class="fa fa-angle-right"><a href="#">Etiam malesuada rutrum enim</a></li>
						<li class="fa fa-angle-right"><a href="#">Aenean elementum facilisis ligula</a></li>
						<li class="fa fa-angle-right"><a href="#">Ut tincidunt elit vitae augue</a></li>
						<li class="fa fa-angle-right"><a href="#">Sed quis odio sagittis leo vehicula</a></li>
					</ul>
				</section>
			</div>
		</div>


	</div>
</div>
<!-- /Footer -->
<!-- Copyright -->
<div id="copyright">
	<div class="container">
		<section>
			<? $APPLICATION->IncludeFile(
				SITE_DIR.'include/copyright.php'
			);
			?>
		</section>
	</div>
</div>
<?}?>
</body>
</html>
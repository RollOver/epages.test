<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Два сайдбара");
?>
	<!-- Main -->
	<div id="main">

		<!-- Main Content -->
		<div class="container">
			<div class="row">
				<div class="6u skel-cell-important">
					<section>
						<header>
							<h2><? $APPLICATION -> ShowTitle(false); ?></h2>
						</header>
						<p>Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget, tempus et, tellus. Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. Pellentesque adipiscing purus ac magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque pede. Donec pulvinar ullamcorper metus. In eu odio at lectus pulvinar mollis. Vestibulum sem magna, elementum ut, vestibulum eu, facilisis quis, arcu. Mauris a dolor. Nulla facilisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					</section>
				</div>
				<div id="sidebar1" class="3u">
					<section>
						<header>
							<h2>Sidebar #1</h2>
						</header>
						<ul class="default alt">
							<li class="fa fa-angle-right"><a href="#">Vestibulum luctus venenatis dui</a></li>
							<li class="fa fa-angle-right"><a href="#">Integer rutrum nisl in mi</a></li>
							<li class="fa fa-angle-right"><a href="#">Etiam malesuada rutrum enim</a></li>
							<li class="fa fa-angle-right"><a href="#">Aenean elementum facilisis ligula</a></li>
							<li class="fa fa-angle-right"><a href="#">Ut tincidunt elit vitae augue</a></li>
						</ul>
					</section>
				</div>
				<div id="sidebar2" class="3u">
					<section>
						<header>
							<h2>Sidebar #2</h2>
						</header>
						<ul class="default alt">
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
		<!-- /Main Content -->

	</div>
	<!-- /Main -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
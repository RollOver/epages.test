<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?><!-- Main -->
<div id="main">
	 <!-- Featured -->
	<div class="container">
		<div class="row">
 <section class="3u"> <a href="#" class="image full"><img src="/local/templates/empty/images/pics01.jpg" alt=""></a>
			<p>
				 Porttitor eu, tempus id, varius non, nibh. Duis enim nulla dapibus lacinia, venenatis. Vestibulum imperdiet.
			</p>
 </section> <section class="3u"> <a href="#" class="image full"><img src="/local/templates/empty/images/pics02.jpg" alt=""></a>
			<p>
				 Vestibulum imperdiet, magna nec eleifend rutrum. Duis enim nulla, luctus eu, dapibus lacinia quam.
			</p>
 </section> <section class="3u"> <a href="#" class="image full"><img src="/local/templates/empty/images/pics03.jpg" alt=""></a>
			<p>
				 Nulla enim eros, porttitor eu, tempus varius non, nibh. Duis enim nulla, luctus eu, dapibus lacinia, venenatis quam.
			</p>
 </section> <section class="3u"> <a href="#" class="image full"><img src="/local/templates/empty/images/pics04.jpg" alt=""></a>
			<p>
				 Duis enim nulla, luctus eu, dapibus lacinia, venenatis id, quam. Vestibulum imperdiet, magna nec eleifend rutrum.
			</p>
 </section>
		</div>
	</div>
	 <!-- /Featured --> <!-- Main Content -->
	<div class="container">
		<div class="divider">
		</div>
		<div class="row">
			<div class="6u">
 <section>
				<div>
					<h2>Welcome to our website</h2>
				</div>
				<p>
					 Welcome to<strong> Elemental</strong>, a free responsive HTML5 website template designed by <a href="http://templated.co">TEMPLATED</a>. It features a neat and clean color combination, a spacious content area, and a large banner area, making it a great design for a corporate/portfolio type of website. And like all of our templates, it is built on HTML5 and CSS3, has full responsive support for desktops, tablets, and mobile devices, and is 100% free to use personally or commercially under the <a href="http://templated.co/license">Creative Commons Attribution 3.0 license</a>. Be sure to check out our <a href="http://templated.co">website</a> for more awesome free HTML5 templates and follow us on <a href="https://twitter.com/templatedco">Twitter</a> for updates and new releases! Enjoy!
				</p>
 </section>
			</div>
			<div id="sidebar1" class="3u">
 <section>
				<div>
					<h2>Новости</h2>
				</div>
				<ul class="default alt">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	".default", 
	[
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => [
			0 => "",
			1 => "",
		],
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => [
			0 => "",
			1 => "",
		],
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => ".default"
	],
	false
);?>
				</ul>
 </section>
			</div>
			<div id="sidebar2" class="3u">
 <section>
				<div>
					<h2>Sidebar #2</h2>
				</div>
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
    <!-- /Main --><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
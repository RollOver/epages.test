<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?>

	<div class="wrap1">
		<h1 class="h1"><?$APPLICATION->ShowTitle(false);?></h1>
		<div class="banner">
			<img src="<?=SITE_TEMPLATE_PATH?>/images/banner.png" alt="" />
		</div>
		<div class="page">
			<h2>Dude,,we can't find that page!</h2>
		</div>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
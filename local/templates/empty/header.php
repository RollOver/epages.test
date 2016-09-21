<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
$bIsMainPage = $APPLICATION -> GetCurPage(false) == SITE_DIR;
?>
<!DOCTYPE HTML>
<!--
	Colorized by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
	<title><? $APPLICATION->ShowTitle(); ?></title>
	<?$APPLICATION->ShowHead();?>
	<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
	<!--[if lte IE 8]><script src="<?=CUtil::GetAdditionalFileUrl(SITE_TEMPLATE_PATH.'/js/html5shiv.js'); ?>"></script><![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <?
    $APPLICATION->AddHeadScript('local/templates/empty/js/skel.min.js');
    $APPLICATION->AddHeadScript('local/templates/empty/js/skel-panels.min.js');
    $APPLICATION->AddHeadScript('local/templates/empty/js/init.js');
    ?>

	<noscript>
		<?

		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/skel-noscript.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/style.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/style-desktop.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/style-desktop.css');
		if(ERROR_404 == 'Y'){
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/404.css');}

		?>
	</noscript>
	<!--[if lte IE 8]><link rel="stylesheet" href="<?=CUtil::GetAdditionalFileUrl(SITE_TEMPLATE_PATH.'/css/ie/v8.css'); ?>" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="<?=CUtil::GetAdditionalFileUrl(SITE_TEMPLATE_PATH.'/css/ie/v9.css'); ?>" /><![endif]-->

</head>
<body class="homepage">
<? $APPLICATION->ShowPanel(); ?>
<!-- Header -->
<div id="header">
	<div id="logo-wrapper">
		<div class="container">

			<!-- Logo -->
			<div id="logo">
				<h1><a href="/index.php">Colorized</a></h1>
				<span>
                    <? $APPLICATION->IncludeFile(
                        SITE_DIR.'include/slogan.php',
                        [],
                        ['MODE' => 'text']
                    ); ?>
                </span>
			</div>

		</div>
	</div>
	<? if(ERROR_404 != 'Y'): ?>
	<div class="container">

		<!-- Nav -->
			<?$APPLICATION->IncludeComponent("bitrix:menu", "menu", [
				"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
				"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
				"DELAY" => "N",	// Откладывать выполнение шаблона меню
				"MAX_LEVEL" => "1",	// Уровень вложенности меню
				"MENU_CACHE_GET_VARS" => [	// Значимые переменные запроса
					0 => "",
				],
				"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
				"MENU_CACHE_TYPE" => "N",	// Тип кеширования
				"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
				"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
				"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
			],
				false
			);?>
	</div>
</div>
<!-- Header -->

<!-- Banner -->
<div id="banner">
	<div class="container">
	</div>
</div>
<!-- /Banner -->
<?endif;?>
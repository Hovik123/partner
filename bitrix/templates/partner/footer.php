<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

<footer class="footer">
	<div class="container ">
		<?$APPLICATION->IncludeComponent("bitrix:menu", "footer_menu", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false
);?>
		<hr class="footer-line">
		<ul class="uslugi-tel">
			<li><span>+7(499)1234567</span></li>
			<li><span>+7(499)1234567</span></li>
			<li><span>+7(499)1234567</span></li>
		</ul>
	</div>
	<hr class="newshr">
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
</body>
</html>
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
<script>
	function initMap() {
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 12,
			center: {lat: 55.7038, lng: 37.58}
		});
		var image = '/bitrix/templates/partner/img/beachflag.png';
		var beachMarker = new google.maps.Marker({
			position: {lat: 55.7039036, lng: 37.65484100000003},
			map: map,
			icon: image
		});
	}
</script>

<script async defer
		src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/sendemail.js"></script>
</body>
</html>
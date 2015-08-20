<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^./services#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/index.php",
	),
	array(
		"CONDITION" => "#^./novosti#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/index.php",
	),
	array(
		"CONDITION" => "#^/novosti/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/novosti/index.php",
	),
	array(
		"CONDITION" => "#^./dela/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/index.php",
	),
);

?>
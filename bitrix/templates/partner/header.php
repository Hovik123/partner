<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><? $APPLICATION->ShowTitle();?></title>
	<? $APPLICATION->ShowHead();?>
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style.css"/>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div id="panel">
	<? $APPLICATION->ShowPanel();?>
	</div>
    <!--Шапака-->
<div class="modal fade modal-blue" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <span class="back_call_text">Обратный звонок</span>
                <span class="text_call">Убедитесь, что имеете дело с настоящими профессионалами</span>
                <div class="col-lg-10 col-sm-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset- col-sm-offset-1" style="margin-top: 10px">
                    <form id="back_call_form">
                        <div class="form-group">

                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ваше имя" name="name" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Ваш телефон" name="phone" required>
                        </div>

                        <div class="error2"></div>
                        <button type="submit" class="btn btn-lazur center">Отправить</button>
                    </form>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-red" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <span class="back_call_text">Бесплатная консультация</span>
                <span class="text_call">Убедитесь, что имеете дело с настоящими профессионалами</span>
                <div class="col-lg-10 col-sm-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset- col-sm-offset-1" style="margin-top: 10px">
                    <form id="consultation_form">
                        <div class="form-group">

                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Ваше имя" >
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Ваш телефон" >
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Ваш вопрос"></textarea>
                        </div>
                        <div class="error"></div>
                        <button type="submit" class="btn btn-lazur center" style="background-color: #9e0714;border-color: #6c000a">Отправить</button>
                    </form>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</div>
<?
if ($APPLICATION->GetCurPage(true) == "/index.php"){?>
<header>
	<div class="container ">
		<div class="row">
			<div class="col-lg-6 col-sm-4 col-md-6 col-xs-12 logo">
				<img alt="Brand" class="img-responsive" width="50" height="50"
					 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAA81BMVEX///9VPnxWPXxWPXxWPXxWPXxWPXxWPXz///9hSYT6+vuFc6BXPn37+vz8+/z9/f2LeqWMe6aOfqiTg6uXiK5bQ4BZQX9iS4VdRYFdRYJfSINuWI5vWY9xXJF0YJR3Y5Z4ZZd5ZZd6Z5h9apq0qcW1qsW1q8a6sMqpnLyrn76tocCvpMGwpMJoUoprVYxeRoJjS4abjLGilLemmbrDutDFvdLPx9nX0eDa1OLb1uPd1+Td2OXe2eXh3Ofj3+nk4Orl4evp5u7u7PLv7fPx7/T08vb08/f19Pf29Pj39vn6+fuEcZ9YP35aQn/8/P1ZQH5fR4PINAOdAAAAB3RSTlMAIWWOw/P002ipnAAAAPhJREFUeF6NldWOhEAUBRvtRsfdfd3d3e3/v2ZPmGSWZNPDqScqqaSBSy4CGJbtSi2ubRkiwXRkBo6ZdJIApeEwoWMIS1JYwuZCW7hc6ApJkgrr+T/eW1V9uKXS5I5GXAjW2VAV9KFfSfgJpk+w4yXhwoqwl5AIGwp4RPgdK3XNHD2ETYiwe6nUa18f5jYSxle4vulw7/EtoCdzvqkPv3bn7M0eYbc7xFPXzqCrRCgH0Hsm/IjgTSb04W0i7EGjz+xw+wR6oZ1MnJ9TWrtToEx+4QfcZJ5X6tnhw+nhvqebdVhZUJX/oFcKvaTotUcvUnY188ue/n38AunzPPE8yg7bAAAAAElFTkSuQmCC">
			</div>
			<div class="col-lg-5 col-xs-12 col-md-6 col-sm-8 col-lg-offset-1 col-sm-offset-1 col-md-offset-1 col-xs-offset-1 pull-right">
				<div class="col-lg-6 col-xs-12 col-md-6 col-sm-6">
					<span class="phone_label">Генеральный директор:</span>
					<span class="phone_number">+7(495)9608745</span>
				</div>
				<div class="col-lg-6 col-xs-12 col-md-6 col-sm-6 seccond_number">
					<span class="phone_label">Главный юрисконсульт:</span>
					<span class="phone_number">+7(495)9608745</span>
				</div>
			</div>
		</div>
	</div>

</header>
<?php }else{?>
    <header>
        <div class="container ">
            <div class="row">
                <div class="col-lg-3 col-sm-2 col-md-3 col-xs-12 logo">
                    <img alt="Brand" class="img-responsive" width="50" height="50"
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAA81BMVEX///9VPnxWPXxWPXxWPXxWPXxWPXxWPXz///9hSYT6+vuFc6BXPn37+vz8+/z9/f2LeqWMe6aOfqiTg6uXiK5bQ4BZQX9iS4VdRYFdRYJfSINuWI5vWY9xXJF0YJR3Y5Z4ZZd5ZZd6Z5h9apq0qcW1qsW1q8a6sMqpnLyrn76tocCvpMGwpMJoUoprVYxeRoJjS4abjLGilLemmbrDutDFvdLPx9nX0eDa1OLb1uPd1+Td2OXe2eXh3Ofj3+nk4Orl4evp5u7u7PLv7fPx7/T08vb08/f19Pf29Pj39vn6+fuEcZ9YP35aQn/8/P1ZQH5fR4PINAOdAAAAB3RSTlMAIWWOw/P002ipnAAAAPhJREFUeF6NldWOhEAUBRvtRsfdfd3d3e3/v2ZPmGSWZNPDqScqqaSBSy4CGJbtSi2ubRkiwXRkBo6ZdJIApeEwoWMIS1JYwuZCW7hc6ApJkgrr+T/eW1V9uKXS5I5GXAjW2VAV9KFfSfgJpk+w4yXhwoqwl5AIGwp4RPgdK3XNHD2ETYiwe6nUa18f5jYSxle4vulw7/EtoCdzvqkPv3bn7M0eYbc7xFPXzqCrRCgH0Hsm/IjgTSb04W0i7EGjz+xw+wR6oZ1MnJ9TWrtToEx+4QfcZJ5X6tnhw+nhvqebdVhZUJX/oFcKvaTotUcvUnY188ue/n38AunzPPE8yg7bAAAAAElFTkSuQmCC">
                </div>
                <div class="col-lg-6 col-xs-12 col-md-6 col-sm-7 ">
                    <div class="col-lg-6 col-xs-12 col-md-6 col-sm-6">
                        <span class="phone_label">Генеральный директор:</span>
                        <span class="phone_number">+7(495)9608745</span>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-md-6 col-sm-6 seccond_number">
                        <span class="phone_label">Главный юрисконсульт:</span>
                        <span class="phone_number">+7(495)9608745</span>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-12 col-md-3 col-sm-3 ">
                    <button class="btn btn-danger red_btn" data-toggle="modal" data-target="#myModal2">Бесплатная консультация</button>
                </div>
            </div>
        </div>

    </header>
<?php }?>
<!--Шапака-->
<!--меню-->
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"header_menu", 
	array(
		"COMPONENT_TEMPLATE" => "header_menu",
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>

<!--меню-->
	
						
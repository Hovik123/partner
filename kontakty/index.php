<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <div class="container">
        <div class="row">
            <ul class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li class="active">Контакты</li>
            </ul>
        </div>
        <hr class="newshr">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 contacts">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "standard.php",
                        "PATH" => "/include/contact_inc.php"
                    )
                );?>


            </div>


        </div>
        <div class="form_contacts">
            <form  class="form_name" id="ajaxform">
                <h6>Форма обратной связи</h6>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
                <input type="text" name="name" maxlength="36" placeholder="Ваше имя">
                <input type="text" name="email" maxlength="36" placeholder="Ваша почта">
                <textarea placeholder="Ваше сообщения"></textarea>
                <div class="error"></div>
                <button id="send_messages" class="btn btn-primary pull-right" type="submit">Отправить</button>
            </form>

        </div>


        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 padding_left_right_none">
            <div id="map">

            </div>
        </div>


    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                    <? if (!empty($arResult)): ?>
                        <ul class="nav navbar-nav">
                            <? foreach ($arResult as $arItem):
                                if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                                    continue;
                                ?>
                                <? if ($arItem["SELECTED"]): ?>
                                <li><a href="<?= $arItem["LINK"] ?>" class="active"><?= $arItem["TEXT"] ?></a></li>
                            <? else: ?>
                                <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
                            <? endif ?>

                            <? endforeach ?>
                        </ul>
                    <? endif ?>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>
<!--????-->
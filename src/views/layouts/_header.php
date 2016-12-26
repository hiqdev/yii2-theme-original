<?php

use hiqdev\thememanager\menus\AbstractMainMenu;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>
<?php NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
    ],
]) ?>
    <?= AbstractMainMenu::widget([], [
        'class' => Nav::class,
        'options' => ['class' => 'navbar-nav navbar-right'],
    ]) ?>
<?php NavBar::end() ?>
<div style="padding-top:50px"></div>

<?php

use yii\bootstrap\NavBar;

use hiqdev\themes\original\menus\NavbarMenu;

?>
<?php NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
    ],
]) ?>
    <?= NavbarMenu::widget([], [
        'encodeLabels' => false,
        'options' => [
            'tag' => false,
        ],
        'itemOptions' => [
            'tag' => false,
        ],
    ]) ?>
<?php NavBar::end() ?>
<div style="padding-top:50px"></div>

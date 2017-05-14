<?php

use yii\bootstrap\NavBar;

use hiqdev\thememanager\menus\AbstractNavbarMenu;

?>
<?php NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
    ],
]) ?>
    <?= AbstractNavbarMenu::widget([], [
        'encodeLabels' => false,
        'options' => [
            'tag' => false,
        ],
        'itemOptions' => [
            'tag' => false,
        ],
    ]) ?>
<?php NavBar::end() ?>
<div style="padding-top:10px"></div>

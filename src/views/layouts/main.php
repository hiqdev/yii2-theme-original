<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

Yii::$app->themeManager->registerAssets();

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]) ?>
        <?= Yii::$app->menuManager->render('main', [
            'class'   => Nav::class,
            'options' => ['class' => 'navbar-nav navbar-right'],
        ]) ?>
    <?php NavBar::end() ?>

    <div class="container">
        <?php if (Yii::$app->themeManager->hasWidget('Flashes')) : ?>
            <?= Yii::$app->themeManager->widget('Flashes') ?>
        <?php endif ?>
        <?= Yii::$app->themeManager->widget([
            'class' => 'Breadcrumbs',
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">
            &copy; <?= Yii::$app->themeManager->widget('CopyrightYears') ?> <?= Yii::$app->themeManager->widget('OrganizationLink') ?>
            <?= Yii::t('hiqdev/themes/original', 'All rights reserved.') ?>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

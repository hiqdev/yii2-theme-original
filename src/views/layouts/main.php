<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

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
    <?= $this->render('//layouts/_header') ?>
    <?= $this->render('//layouts/_after_header') ?>

    <?= $this->render('//layouts/_content', compact('content')) ?>
</div>

<?= $this->render('//layouts/_footer') ?>
<?= $this->render('//layouts/_after_footer') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

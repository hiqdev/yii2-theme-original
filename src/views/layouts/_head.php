<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

Yii::$app->themeManager->registerAssets();

?>
<meta charset="<?= Yii::$app->charset ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?= Html::csrfMetaTags() ?>
<title><?= Html::encode($this->title) ?></title>
<?php $this->head() ?>

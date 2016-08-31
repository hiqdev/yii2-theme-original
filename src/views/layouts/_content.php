<div class="container">
    <?php if (Yii::$app->themeManager->hasWidget('Flashes')) : ?>
        <?= Yii::$app->themeManager->widget('Flashes') ?>
    <?php endif ?>
    <?= Yii::$app->themeManager->widget([
        'class' => 'Breadcrumbs',
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <div class="row"><div class="col-xs-12">
        <?= $content ?>
    </div></div>
</div>

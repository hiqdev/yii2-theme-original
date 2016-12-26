<div class="container">
    <?= \hiqdev\pnotify\Flashes::widget() ?>
    <?= \yii\widgets\Breadcrumbs::widget([
        'class' => 'Breadcrumbs',
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <div class="row">
        <div class="col-xs-12">
            <?= $content ?>
        </div>
    </div>
</div>

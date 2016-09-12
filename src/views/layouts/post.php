<?php

?>
<?php $this->beginContent('//layouts/main') ?>

    <h1><?= $this->title ?></h1>

    <?php if (!empty($this->params['date'])) : ?>
        <h3><?= Yii::$app->formatter->asDate($this->params['date']) ?></h3>
    <?php endif ?>

    <?= $content ?>

    <br/><br/>
    <?php if (!empty($this->params['relatedPosts'])) : ?>
        <h3>Related posts:</h3>
    <?php endif ?>

<?php $this->endContent() ?>

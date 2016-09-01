<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <?= $this->render('//layouts/_head') ?>
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

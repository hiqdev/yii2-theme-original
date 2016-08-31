<footer class="footer">
    <div class="container">
        <p class="pull-left">
            &copy; <?= Yii::$app->themeManager->widget('CopyrightYears') ?> <?= Yii::$app->themeManager->widget('OrganizationLink') ?>.
            <?= Yii::t('hiqdev/themes/original', 'All rights reserved.') ?>
        <p class="pull-right"><?= $this->render('//layouts/_poweredBy') ?></p>
    </div>
</footer>

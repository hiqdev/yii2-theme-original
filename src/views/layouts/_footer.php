<footer class="footer">
    <div class="container">
        <p class="pull-left">
            &copy; <?= Yii::$app->themeManager->widget('CopyrightYears') ?> <?= Yii::$app->themeManager->widget('OrganizationLink') ?>.
            <?= Yii::t('hiqdev/themes/original', 'All rights reserved.') ?>
        </p>
        <p class="pull-right">
            <?= Yii::$app->themeManager->widget('PoweredBy') ?>
        </p>
    </div>
</footer>

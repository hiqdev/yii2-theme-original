<footer class="footer">
    <div class="container">
        <p class="pull-left">
            &copy; <?= \hiqdev\thememanager\widgets\CopyrightYears::widget() ?> <?= \hiqdev\thememanager\widgets\OrganizationLink::widget()?>.
            <?= Yii::t('hiqdev:themes:original', 'All rights reserved.') ?>
        </p>
        <p class="pull-right">
            <?= \hiqdev\thememanager\widgets\PoweredBy::widget() ?>
        </p>
    </div>
</footer>

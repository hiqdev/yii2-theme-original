<?php

namespace hiqdev\themes\original;

/**
 * Theme main asset bundle.
 */
class Asset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@hiqdev/themes/original/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/original.css',
    ];

    public $js = [];

    /**
     * @inheritdoc
     */
    public $depends = [
        \yii\web\Asset::class,
        \yii\bootstrap\BootstrapAsset::class,
    ];
}

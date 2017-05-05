<?php
/**
 * Yii2 Original Theme for Yii2 projects.
 *
 * @see      https://github.com/hiqdev/yii2-theme-original
 * @package   yii2-theme-original
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'themeManager' => [
            'original' => [
                'class' => \hiqdev\themes\original\Theme::class,
            ],
        ],
        'i18n' => [
            'translations' => [
                'hiqdev:themes:original' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hiqdev/themes/original/messages',
                ],
            ],
        ],
    ],
];

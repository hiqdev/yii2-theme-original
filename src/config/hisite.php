<?php

/*
 * Original Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-original
 * @package   yii2-theme-original
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
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
                'hiqdev/themes/original' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hiqdev/themes/original/messages',
                    'fileMap' => [
                        'original' => 'original.php',
                    ],
                ],
            ],
        ],
    ],
];

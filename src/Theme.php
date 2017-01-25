<?php
/**
 * Yii2 Original Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-original
 * @package   yii2-theme-original
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\themes\original;

/**
 * Theme class.
 */
class Theme extends \hiqdev\thememanager\Theme
{
    public $label = 'Original';

    public $images = [
        '/assets/screenshots/1.jpg',
    ];

    public $assets = [
        Asset::class,
    ];
}

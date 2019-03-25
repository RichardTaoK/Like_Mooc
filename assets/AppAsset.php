<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/desktop-fiesta-s0ppl1jotswwb3xr.css',
        'css/ionicons.min.css',
        'css/iconfont.css',
        'css/app.db5cc9ffc4ff1470eba0c860c8d351a6.css',
    ];
    public $js = [
        'js/3.b11e1dbeae30020ea5c9.js',
        'js/analytics.js',
        'js/meiqia.js',
        'js/vds.js',
        'js/40z3oz40z4lz17z4bz3mz48z4az42z3mz40z51z4l.js',
        'js/app.45775e719816b2a5a374.js',
        'js/attrs_jsonp.js',
        'js/desktop-fiesta-s0ppl1jotswwb3xr.js',
        'js/doorbell-s0ppl1jotswwb3xr.js',
        'js/init.js',
        'js/manifest.849e8c48e8b63f478697.js',
        'js/vendor.d592029e7f5c8614e1a5.js',
        'js/hm.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

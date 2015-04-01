<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
        'http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css',
        'adminlte/css/AdminLTE.min.css',
        'adminlte/css/skins/skin-blue.min.css',
        'adminlte/css/datepicker3.css',
        'adminlte/css/dashboard.css',
    ];
    public $js = [
        'adminlte/js/app.js',
        'adminlte/js/jquery.slimscroll.min.js',
        'adminlte/js/bootstrap-datepicker/bootstrap-datepicker.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

<?php


namespace frontend\assets;

use yii\web\AssetBundle;

class TestAsset extends AssetBundle
{
    public $sourcePath = "@npm/startbootstrap-clean-blog";
    public $css = [
        'css/clean-blog.scss',
    ];
    public $js = [
        'js/clean-blog.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
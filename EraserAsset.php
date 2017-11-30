<?php

namespace xj\eraser;

use yii\web\AssetBundle;

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class EraserAsset extends AssetBundle
{

    public $sourcePath = '@bower/jquery-eraser';
    public $js = ['jquery.eraser.js'];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}

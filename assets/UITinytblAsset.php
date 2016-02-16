<?php

namespace estai\uitinytbl\assets;
use yii\web\AssetBundle;

class UITinytblAsset extends AssetBundle
{
    public $sourcePath = '@bower/ui-tinytbl-scroller';

    public $js = [
        'jquery.ui.tinytbl.js',
        'perfect-scrollbar.js'
    ];
     public $css = [
        'jquery.ui.tinytbl.css',
        'perfect-scrollbar.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\jui\JuiAsset'
    ];
}

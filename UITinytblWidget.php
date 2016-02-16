<?php

namespace estai\uitinytbl;

use yii\base\Widget;
use estai\uitinytbl\assets\UITinytblAsset;
use yii\helpers\Json;
use yii\web\View;

class UITinytblWidget extends Widget {

    public $container = '.block';
    public $wheelSpeed = '40';
    public $settings = [];

    public function run()
    {
        return $this->registerUITinytblAssetJs();
    }

    private function registerUITinytblAssetJs()
    {
        $jQueryContainer = "$('{$this->container} table')";
        $jQueryContainerScroll = "$('{$this->container} .ui-tinytbl-tb-right')";

        UITinytblAsset::register($this->view);
        

        if(!empty($this->settings)) {
            $var = uniqid('$container');
            $query = "var {$var} = {$jQueryContainer};" . PHP_EOL;

            $options = Json::encode($this->settings);
            $this->view->registerJs($query . "{$var} . tinytbl({$options})", View::POS_READY);
            return $this->view->registerJs($jQueryContainerScroll . " . perfectScrollbar({wheelSpeed:$this->wheelSpeed})", View::POS_READY);
             
        }
        $this->view->registerJs($jQueryContainer . " . tinytbl()", View::POS_READY);
        return $this->view->registerJs($jQueryContainerScroll . " . perfectScrollbar({wheelSpeed:$this->wheelSpeed})", View::POS_READY);
       
    }
}

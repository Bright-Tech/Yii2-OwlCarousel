<?php
/**
 */

namespace bright\yii2\owlcarousel;

use yii\web\AssetBundle;

/**
 * @author Sam Xiao
 *
 *
 */
class OwlCarouselAsset extends AssetBundle
{
    public $sourcePath = '@bower/owl.carousel/dist';
    public $css = [
        'assets/owl.carousel.min.css',
    ];
    public $js = [
        'owl.carousel.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

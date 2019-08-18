<?php
namespace kilyakus\base;

class ToastrAsset extends \yii\web\AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
    }
    public $css = [
        'build/toastr.css',
    ];
    public $js = [
        'build/toastr.min.js',
    ],
    public $depends = [
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_END
    );
}

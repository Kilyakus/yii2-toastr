<?php
namespace kilyakus\toastr;

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
    ];
    public $depends = [
        'kilyakus\fonts\FontAsset'
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}

<?php

namespace app\widgets;

use yii\base\Widget;

class Login extends Widget
{
    public function init()
    {
        parent::init();
        ob_start();
    }

    public function run()
    {
        $content = ob_get_clean();
        return $this->render('login');
    }
}
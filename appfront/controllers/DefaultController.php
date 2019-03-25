<?php

namespace app\appfront\controllers;

use yii\web\Controller;

/**
 * Default controller for the `front` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex($id)
    {
        return $this->render('index');
    }
}

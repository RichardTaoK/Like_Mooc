<?php

namespace app\controllers;
use yii\imagine\Image;
use Yii;

class PageController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionShow($id)
    {

        Image::thumbnail('./image/test.jpg', 120, 120)
            ->save(\Yii::getAlias('./image/thumbnail/test.jpg'));
        return $this->render('show');
    }

}

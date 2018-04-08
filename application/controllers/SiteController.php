<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\Slider;
use app\models\Author;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $slides = Slider::find()->all();
        return $this->render('index', [
            'slides' => $slides,
        ]);
    }

    public function actionDetailview()
    {
        return $this->render('detailview');
    }

    public function actionAbout()
    {
        $model = Author::findOne(1);
        return $this->render('about', [
            'model' => $model,
        ]);
    }
}

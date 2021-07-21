<?php

declare(strict_types=1);

namespace app\controllers;

use app\models\Test;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        $testData = Test::find()->all();

        return $this->render('index', [
           'testData' => $testData
        ]);
    }
}

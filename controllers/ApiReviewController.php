<?php


namespace app\controllers;
use app\models\db\Review;
use yii\rest\ActiveController;

class ApiReviewController extends ActiveController
{
    public $modelClass = Review::class;
}
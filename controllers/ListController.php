<?php

namespace app\controllers;

use yii\web\Controller;

use app\models\List;

class ListController extends Controller
{
    public function actionIndex()
    {
        $query = List::find();


        $lists = $query->orderBy('name')


        return $this->render('index', [
            'lists' => $lists,

        ]);
    }
}
<?php

namespace app\controllers;

use yii\web\controller;
// use app\models\Test;

/**
* 
*/
class OrderController extends Controller
{
	public $layout = "layout2";

	public function actionIndex()
	{
		// $this->layout = false;
		// echo "hello world!";
		// $model = new Test;
		// $data = $model->find()->one();
		return $this->render("index");
	}

	public function actionCheck()
	{
		// $this->layout = false;
		// echo "hello world!";
		// $model = new Test;
		// $data = $model->find()->one();
		return $this->render("check");
	}
}
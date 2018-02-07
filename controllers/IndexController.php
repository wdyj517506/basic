<?php

namespace app\controllers;

use yii\web\controller;
use app\models\Test;

/**
* 
*/
class IndexController extends Controller
{
	public $layout = "layout1";

	public function actionIndex()
	{
		// $this->layout = false;
		// echo "hello world!";
		$model = new Test;
		$data = $model->find()->one();
		return $this->render("index",array('row' => $data ));
	}
}
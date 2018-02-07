<?php

namespace app\controllers;

use yii\web\controller;

/**
* 前台会员控制器
*/
class MemberController extends Controller
{
	public $layout = "layout2";

	public function actionAuth()
	{
		return $this->render("auth");
	}
}
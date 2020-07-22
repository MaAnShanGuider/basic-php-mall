<?php


namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class AgentController extends Controller
{
	public function actionIndex($message = '卧槽') {
		return $this->render('index', ['message' => $message]);
		
	}
}
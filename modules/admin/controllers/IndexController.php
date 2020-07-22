<?php


namespace app\modules\admin\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class IndexController extends Controller
{
	public function actionIndex($message = '卧槽') {
		return $this->render('index', ['message' => $message]);
		
	}
	
	public function actionMember($message = '卧槽') {
		$this->layout = false;
		return $this->render('member');
		
	}
}
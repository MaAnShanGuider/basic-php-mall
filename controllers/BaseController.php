<?php


namespace app\controllers;


use Yii;
use yii\web\Controller;

class BaseController extends  Controller
{
	public function init(){
//		if(!(Yii::$app->session->get('account')) && !(Yii::$app->session->get('admin_id')) && !(Yii::$app->session->get('system_id')) ){
//			header('location:'.Yii::$app->urlManager->createUrl('/login/index'));
//			exit;
//		}
	}
	
	public function beforeAction($action)
	{
		
		return parent::beforeAction($action);
		
	}
	
}
<?php


namespace app\controllers;


use Yii;
use yii\web\Controller;

class BaseController extends  Controller
{
	public function init(){
		parent::init(); // parent::init() 新版本的yii2重写controller后，一定要执行，不然会报错
//		if(!(Yii::$app->session->get('account')) && !(Yii::$app->session->get('admin_id')) && !(Yii::$app->session->get('system_id')) ){
//			header('location:'.Yii::$app->urlManager->createUrl('/login/index'));
//			exit;
//		}
	}
	
	public function beforeAction($action)
	{
//		var_dump($action);
		return parent::beforeAction($action);
		
	}
	
}
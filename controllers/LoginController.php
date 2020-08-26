<?php


namespace app\controllers;
use Yii;


class LoginController extends BaseController
{
	/**
	 * @name 登陆页面+接口
	 * @return string
	 */
	public function actionIndex()
	{
		$this->layout = false;
		if (Yii::$app->request->isPost) {
			$data = Yii::$app->request->post();
			if ($data['verification'] !== $this->createAction('captcha')->getVerifyCode()) {
				echo json_encode(array('status' => 0, 'msg' => '验证码错误'));
				exit;
			}
//			LoginService::service()->logIn($data);
		}
		return $this->render('index');
	}
}
<?php
namespace  app\modules\admin;

use yii\base\Module;

class AdminModule extends Module
{
	public function init()
	{
		parent::init();
		
		$this->params['foo'] = 'bar';
		// ...  其他初始化代码 ...
	}
}
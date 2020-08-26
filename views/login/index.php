<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>
<!doctype html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="/css/login/index.css">
	<title>登录</title>
</head>
<script src="/js/login/index.js"></script>
<body>

<section class="container">
	<main>
		<div>
			<?php DatePicker::widget([
			'language' => 'zh-CN',
			'name'  => 'country',
			'clientOptions' => [
			'dateFormat' => 'yy-mm-dd',
			],
			]);
			?>
		</div>
		<input type="text">
	</main>

</section>
</body>
</html>


<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="login-status" content="">
    <meta name="login-token" content="">
    <title><?= Html::encode($this->title) ?></title>
    <link href="../../web/css/app.css" rel="stylesheet">
</head>
<body>
    <body>
        <div id='app'></div>
        <script type="text/javascript" src="../../web/js/app.js"></script>
    </body>
</body>
</html>

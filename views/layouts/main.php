<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/site.css">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular-route.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular-resource.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular-animate.js"></script>
    <?= Html::csrfMetaTags() ?>
    <title>Angular JS</title>
    <?php $this->head() ?>
</head>
<body ng-app="cleveroad">
    <?= $content ?> 


    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/config.js"></script>
    <script type="text/javascript" src="js/controllers/controller.js"></script>
    <script type="text/javascript" src="js/controllers/RegisterFormCtrl.js"></script>
    <script type="text/javascript" src="js/controllers/LoginFormCtrl.js"></script>
    <script type="text/javascript" src="js/services/user.js"></script>
    <script type="text/javascript" src="js/services/product.js"></script>
</body>
</html>
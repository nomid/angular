<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\User;


class AuthController extends Controller{
    public $enableCsrfValidation = false;

	public function actionIndex(){

        $request = Yii::$app->request;
		if(!$request->isPost){
            throw new NotFoundHttpException();
        }

        $result = [
            'status' => 'fail',
        ];
        $login_data = $request->post('user');
//        var_dump($login_data);die;
        $user = User::findByEmail($login_data['email']);
        if(isset($user) && $user->validatePassword($login_data['password'])){
            $user->generateNewAuthKey();
            $result = [
                'status' => 'ok',
                'hash'   => $user->auth_key,
            ];
        }

        die(json_encode($result));
	}
}
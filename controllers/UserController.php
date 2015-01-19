<?php
namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;
class UserController extends SiteController
{
    public $enableCsrfValidation = false;
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'actions' => ['new', 'create'],
//                        'allow' => true,
//                        'roles' => ['?'],
//                    ],
//                    [
//                        'actions' => ['edit', 'update', 'get_by_access_token'],
//                        'allow' => true,
//                        'roles' => ['@']
//                    ],
//                ],
//            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'create' => ['post'],
//                    'get_by_access_token' => ['post'],
//                    'view'   => ['get'],
//                    'new'    => ['get'],
//                    'edit'   => ['get'],
//                    'update' => ['put'],
//                    'activate' => ['get'],
//                ],
//            ],
//        ];
//    }
    public function actionCreate()
    {
        $user = new User(Yii::$app->request->post('user'));
        $result = ['status' => 'fail'];
        if($user->save()){
            $result = ['status' => 'ok'];
        }
        die(json_encode($result));
    }

    public function actionByAccessToken()
    {
        $access_token = Yii::$app->request->post('access_token');
        $user = User::findOne(['access_token' => $access_token]);
        $result = ['user' => $user->toArray()];
        die(json_encode($result));
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        Yii::$app->response->cookies->remove('access_token');
        die('ok');
    }

    public function actionEdit()
    {
        if(Yii::$app->request->get('id') != Yii::$app->user->id){
            throw new ForbiddenHttpException();
        }
    }
    public function actionUpdate()
    {
        if(Yii::$app->request->get('id') != Yii::$app->user->id){
            throw new ForbiddenHttpException();
        }
        $user = User::loadUser();
        $user->load(Yii::$app->request->post());
        if($user->save()){
            Yii::$app->session->setFlash('success', 'Profile updated');
            $this->redirect('/users/'.$user->id);
        }
        return ['view' => 'edit'];
    }

}
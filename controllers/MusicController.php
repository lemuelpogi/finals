<?php

namespace app\controllers;
use app\models\Music;
use yii;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\AccessRule;


class MusicController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                ],
                'only' => ['create','update','delete'],
                'rules'=>[
                    [
                        'actions'=>['create','update'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['delete'],
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],


        ];
    }
    public function actionCreate()
    {
        $model = new Music;

        if($model->load(Yii::$app->request->post()) && $model->save()){
            $this->redirect(['music/index']);
        }

        return $this->render('create', compact('model'));
    }

    public function actionDelete($id)
    {
        $model = Music::findOne($id);

        Yii::$app->db->createCommand()
        ->delete('music','id=:id',[':id'=>$id])
        ->execute();

        $model->delete();
        
        return $this->redirect(['/music/index']);
    }

    public function actionIndex()
    {
        $music = Music::find()->orderBy('title')->all();
        return $this->render('index',['music'=>$music]);
    }

    public function actionUpdate($id)
    {
        $model = Music::findOne($id);
        return $this->render('update',compact('model'));
    }

    public function actionView($id)
    {
        $model = Music::findOne($id);

        return $this->render('view',compact('model'));
    }

}

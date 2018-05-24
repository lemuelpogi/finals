<?php

namespace app\controllers;
use app\models\Artist;
use yii;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\AccessRule;


class ArtistController extends \yii\web\Controller
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
        $model = new Artist;

        if($model->load(Yii::$app->request->post()) && $model->save()){
            $this->redirect(['artist/index']);
        }

        return $this->render('create', compact('model'));
    }

    public function actionDelete($id)
    {
        $model = Artist::findOne($id);

        Yii::$app->db->createCommand()
        ->delete('artist','id=:id',[':id'=>$id])
        ->execute();

        $model->delete();
        
        return $this->redirect(['/artist/index']);
    }

    public function actionIndex()
    {
        $artist = Artist::find()->orderBy('name')->all();
        return $this->render('index',['artist'=>$artist]);
    }

    public function actionUpdate($id)
    {
        $model = Artist::findOne($id);
        return $this->render('update',compact('model'));
    }

    public function actionView($id)
    {
        $model = Artist::findOne($id);

        return $this->render('view',compact('model'));
    }
}

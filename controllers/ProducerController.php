<?php

namespace app\controllers;
use app\models\Producers;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\AccessRule;
use yii;


class ProducerController extends \yii\web\Controller
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
        $model = new Producers;

        if($model->load(Yii::$app->request->post()) && $model->save()){
            $this->redirect(['producer/index']);
        }

        return $this->render('create', compact('model'));
    }

    public function actionDelete($id)
    {
        $model = Producers::findOne($id);

        Yii::$app->db->createCommand()
        ->delete('producers','id=:id',[':id'=>$id])
        ->execute();

        $model->delete();
        
        return $this->redirect(['/producer/index']);
    }

    public function actionIndex()
    {
        $pro = Producers::find()->orderBy('producer_name')->all();
        
        return $this->render('index',['pro'=>$pro]);

    }

    public function actionUpdate($id)
    {
        $model = Producers::findOne($id);

            if($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->redirect(['/producer/view', 'id'=>$id]);
        }

        return $this->render('update', compact('model'));
    }

    public function actionView($id)
    {
        $model = Producers::findOne($id);

        return $this->render('view',compact('model'));
    }

}

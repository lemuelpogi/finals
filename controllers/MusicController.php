<?php

namespace app\controllers;
use app\models\Music;
use yii;

class MusicController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new Music;

        if($model->load(Yii::$app->request->post()) && $model->save()
        ){
            return $this->redirect(['/music/index']);
        }
        return $this->render('create',['model' => $model]);
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

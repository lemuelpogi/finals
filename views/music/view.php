<?php
use yii\widgets\DetailView;
use yii\helpers\html;


$this->params['breadcrums'][] = ['label'=> 'Music','url'=>['/music/index']];
$this->params['breadcrums'][] = $model->title;

?>
<h1>View Your Music</h1>

<?= DetailView::widget([
'model' => $model,
'attributes' => [
'id',
'title',
'year',
'genre'
]]); ?>

<div class="pull-right">
	<?= Html::a('Update Post',
            ['/music/update','id'=>$model->id],
            ['class'=>'btn btn-primary glyphicon glyphicon-pencil']);?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger glyphicon glyphicon-trash',
            'data' => [
                'confirm' => 'Are you sure you want to delete this music?',
                'method' => 'post',
            ],
        ]) ?>
	
</div>

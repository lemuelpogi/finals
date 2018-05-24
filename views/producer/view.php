<?php
use yii\widgets\DetailView;
use yii\helpers\html;


$this->params['breadcrums'][] = ['label'=> 'Producers','url'=>['/producer/index']];
$this->params['breadcrums'][] = $model->producer_name;

?>
<h1>View Your Producers</h1>

<?= DetailView::widget([
'model' => $model,
'attributes' => [
'id',
'music_id',
'artist_id',
'producer_name',
'company'
]]); ?>

<div class="pull-right">
	<?= Html::a('Update Artist',
            ['/producer/update','id'=>$model->id],
            ['class'=>'btn btn-primary glyphicon glyphicon-pencil']);?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger glyphicon glyphicon-trash',
            'data' => [
                'confirm' => 'Are you sure you want to delete this music?',
                'method' => 'post',
            ],
        ]) ?>
	
</div>

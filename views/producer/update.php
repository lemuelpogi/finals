<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Update Your Producer</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>

            <?= $form->field($model, 'music_id')->textInput() ?>
        
			<?= $form->field($model, 'artist_id')->textInput() ?>

			<?= $form->field($model, 'producer_name')->textInput() ?>

			<?= $form->field($model, 'company')->textInput() ?>
			
			<div class="pull-right">
	<?= Html::a('Update Your Music',
	['music/view', 'id'=> $model->id],
	['class' => 'btn btn-primary glyphicon glyphicon-pencil']); ?>
	
</div>


			<?php ActiveForm::end(); ?>
	</div>
</div>

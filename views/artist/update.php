<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Update Your Artist</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>

			<?= $form->field($model, 'name')->textInput() ?>

			<?= $form->field($model, 'age')->textInput() ?>

			<?= $form->field($model, 'country')->textInput() ?>
			
			<div class="pull-right">
	<?= Html::a('Update Your Artist',
	['artist/view', 'id'=> $model->id],
	['class' => 'btn btn-primary glyphicon glyphicon-pencil']); ?>
	
</div>


			<?php ActiveForm::end(); ?>
	</div>
</div>

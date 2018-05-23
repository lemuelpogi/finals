<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Update Your Music</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>

			<?= $form->field($model, 'title')->textInput() ?>

			<?= $form->field($model, 'year')->textInput() ?>

			<?= $form->field($model, 'genre')->textInput() ?>
			
			<div class="pull-right">
	<?= Html::a('Update Your Music',
	['music/view', 'id'=> $model->id],
	['class' => 'btn btn-primary glyphicon glyphicon-pencil']); ?>
	
</div>


			<?php ActiveForm::end(); ?>
	</div>
</div>

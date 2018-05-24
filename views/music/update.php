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
			
			<div class="form-group">
    	<?= Html::submitButton("Update Music", ['class'=>'btn btn-primary']); ?>
			</div>

			<?php ActiveForm::end(); ?>

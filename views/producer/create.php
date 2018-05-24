<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Create Product</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>
            <?= $form->field($model, 'music_id')->textInput() ?>

            <?= $form->field($model, 'artist_id')->textInput() ?>

			<?= $form->field($model, 'producer_name')->textInput() ?>

			<?= $form->field($model, 'company')->textInput() ?>

			<div class="form-group">
				<?= Html::submitButton('Submit',['class'=>'btn btn-primary']) ?>
			</div>

			<?php ActiveForm::end(); ?>
	</div>
</div>

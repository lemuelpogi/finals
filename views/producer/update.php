<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\Music;
use app\models\Artist;
use yii\widgets\ActiveForm;
?>
<h1>Update Your Producer</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>

            <?= $form->field($model,'music_id')->dropDownList(ArrayHelper::map(
				Music::find()->asArray()->all(), 'id','title',''))?>
        
			<?= $form->field($model,'artist_id')->dropDownList(ArrayHelper::map(
				Artist::find()->asArray()->all(), 'id','name'))?>

			<?= $form->field($model, 'producer_name')->textInput() ?>

			<?= $form->field($model, 'company')->textInput() ?>
			
			<<div class="form-group">
    	<?= Html::submitButton("Update Producer", ['class'=>'btn btn-primary']); ?>
			</div>


			<?php ActiveForm::end(); ?>
	</div>
</div>

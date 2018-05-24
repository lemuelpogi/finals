<?php
use yii\helpers\Html;
?>

<h1>
	<span class="pull-left">
    <?= Html::a('Create Artist',['/artist/create'],
    ['class'=>'btn btn-primary glyphicon glyphicon-plus']); ?>
	</span>
    <span class="pull-right">
    <?= Html::a('Go to back to music',['/music/index'],
    ['class'=>'btn btn-primary glyphicon glyphicon-arrow-left']); ?>
    </span>
</h1>
    

<table class="table table-borderd table-stripped">
	<tr>
		<th>Full Name</th>
		<th>Age</th>
		<th>Country</th>
	</tr>

	<?php foreach ($artist as $musics): ?> 
		<tr>
			<th><?=Html::a($musics->name,['/artist/view','id'=> $musics ->id])?></th>
			<th><?= $musics->age ?></th>
			<th><?= $musics->country ?></th>
		</tr>
		<?php endforeach; ?>
</table>


<?php
use app\models\Music;
use yii\helpers\Html;
?>

<h1>
	<span class="pull-left">
    <?= Html::a('Create Music',['/music/create'],
    ['class'=>'btn btn-primary glyphicon glyphicon-plus']); ?>
	</span>

    <span class="pull-right">
    <?= Html::a('Go to artist',['/artist/index'],
    ['class'=>'btn btn-primary glyphicon glyphicon-share-alt']); ?>
    </span>
</h1>
    

<table class="table table-borderd table-stripped">
	<tr>
		<th>Title</th>
		<th>Year</th>
		<th>genre</th>
	</tr>

	<?php foreach ($music as $musics): ?> 
		<tr>
			<th><?=Html::a($musics->title,['/music/view','id'=> $musics ->id])?></th>
			<th><?= $musics->year ?></th>
			<th><?= $musics->genre ?></th>
		</tr>
		<?php endforeach; ?>
</table>


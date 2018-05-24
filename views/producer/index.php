<?php
use yii\helpers\Html;
?>

<h1>
	<span class="pull-left">
    <?= Html::a('Create Producer',['/producer/create'],
    ['class'=>'btn btn-primary glyphicon glyphicon-plus']); ?>
	</span>
</h1>
    

<table class="table table-borderd table-stripped">
	<tr>
		<th>Music</th>
		<th>Artist</th>
		<th>Producer</th>
        <th>Company</th>
	</tr>

	<?php foreach ($pro as $pros): ?> 
		<tr>
            <th><?=Html::a($pros->music->title,['/producer/view','id'=> $pros ->id])?></th>
            <th><?= $pros->artist->name ?></th>
            <th><?= $pros->producer_name ?></th>
			<th><?= $pros->company ?></th>
		</tr>
		<?php endforeach; ?>
</table>


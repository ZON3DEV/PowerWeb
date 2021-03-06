
<!------------------------------------------------------------------------------------------->
<!---> 
<!--- PowerWeb 3.0 - translated by fallenfate at RageZone (https://forum.ragezone.com/f587/)-> 
<!---> 
<!------------------------------------------------------------------------------------------->

<div class="note mb15">
	<div class="note_title">Meine Charaktere</div>
	<div class="note_body">
		<table class="items">
			<tr>
				<th>Name</th>
				<th width="95px">Level</th>
				<th width="95px">Volk</th>
				<th width="95px">Klasse</th>
				<th width="150px">Erstellt am:</th>
			</tr>
			<?php foreach ($model as $model): ?>
			<tr class="center">
				<td><a href="<?php echo Yii::app()->homeUrl.'player/'.$model->name; ?>"><?php echo $model->name; ?></a></td>
				<td><?php echo Info::lvl($model->exp); ?></td>
				<td><?php echo Info::race($model->race) ?></td>
				<td><?php echo Info::player_class($model->player_class) ?></td>
				<td><?php echo $model->creation_date; ?></td>
			</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>

<?php if ($referals): ?>
<div class="note">
	<div class="note_title">Charakter Empfehlungen</div>
	<div class="note_body">
		<?php if(Yii::app()->user->hasFlash('message')) echo Yii::app()->user->getFlash('message'); ?>
		<?php echo CHtml::beginForm(); ?>
		<table class="table_top">
			<tr class="bold center">
				<th>Name</th>
				<th width="95px">Level</th>
				<th width="95px">Volk</th>
				<th width="95px">Klasse</th>
				<th width="140px">Tag der Erstellung</th>
				<th width="95px">Belohnung</th>
			</tr>
		<?php foreach ($referals as $referal): ?>
			<tr class="center">
				<td><?php echo $referal->name; ?></td>
				<td><?php echo Info::lvl($referal->exp); ?></td>
				<td><?php echo Info::race($referal->race); ?></td>
				<td><?php echo Info::player_class($referal->player_class); ?></td>
				<td><?php echo Yii::app()->dateFormatter->format('dd.M.y, HH:mm:ss', $referal->creation_date); ?></td>
				<td><?php if(Info::lvl($referal->exp) >= 50): ?><input type="radio" id="LogReferals_slave_id" name="LogReferals[slave_id]" value="<?php echo $referal->account_id; ?>" /><?php endif; ?></td>
			</tr>
		<?php endforeach ?>
			<tr class="center">
				<td colspan="6"><input type="submit" name="yt0" value="Erhalte einen Bonus" class="button"></td>
			</tr>
		</table>
		<?php echo CHtml::endForm(); ?>
	</div>
</div>
<?php endif; ?>
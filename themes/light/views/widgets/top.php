<div class="note">
	<div class="note-title">Top Pvp</div>
	<div class="note-body">
		<table class="table">
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Level</th>
				<th>PvP</th>
				<th>AP</th>
				<th>Race</th>
				<th>Class</th>
				<th>Status</th>
			</tr>
			<?php $i = 1; foreach ($model as $data): ?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><a href="<?php echo Yii::app()->homeUrl.'player/'.$data['name']; ?>"><?php echo $data['name']; ?></a></td>
				<td><?php echo @Info::getLevel($data['exp']); ?></td>
				<td title="Kills: Per day / During the week / Total"><b><?php echo $data['daily_kill']; ?></b> / <?php echo $data['weekly_kill']; ?> / <?php echo $data['all_kill']; ?></td>
				<td><?php echo number_format($data['ap'],0,' ',' '); ?></td>
				<td><?php echo @Info::getRaceIco($data['race']) ?></td>
				<td><?php echo @Info::getClassIco($data['player_class']) ?></td>
				<td><?php echo @Info::getOnlineIco($data['online']); ?></td>
			</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>
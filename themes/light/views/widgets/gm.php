<div class="menu">
	<div class="menu-title">GM's online</div>
	<div class="menu-body">
		<?php if ($model): ?>
			<table class="table">
				<?php foreach ($model as $data): ?>
				<tr>
					<td width="32px"><?php echo Info::getAccessLevelIco($data['access_level']); ?></td>
					<td class="tleft"><a href="<?php echo @Power::url('player', $data['name']); ?>"><?php echo $data['name']; ?></a></td>
					<td class="tright"><?php echo Info::getRaceIco($data['race']); ?></td>
				</tr>
				<?php endforeach ?>
			</table>
		<?php else: ?>
			<div class="menu_line">No GM online</div>
		<?php endif; ?>
	</div>
</div>
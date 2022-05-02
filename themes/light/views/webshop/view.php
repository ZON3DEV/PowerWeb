<div class="note">
	<div class="note-title">Webshop</div>
	<div class="note-body">
		<table class="table">
			<tr>
				<th>Title</th>
				<th>Qty</th>
				<th>Price</th>
				<th>Buy</th>
			</tr>
			<?php foreach ($model as $data): ?>
				<tr>
					<td class="tleft"><?php echo @Adb::url('item', $data['item_id']); ?></td>
					<td width="90px"><?php echo $data['quantity']; ?></td>
					<td width="90px"><?php echo $data['price']; ?></td>
					<td width="90px"><i class="btn-point-gold modal-show" modal="modal-buy" itemId="<?php echo $data['item_id']; ?>" changeCount="<?php echo $data['change_quantity_enable']; ?>" title="Purchase"></i></td>
				</tr>
			<?php endforeach; ?>
		</table>
		<div class="pages"><?php @Config::pages(); ?></div>
	</div>
</div>


<?php $this->renderPartial('_modal', array('players'=>$players)); ?>
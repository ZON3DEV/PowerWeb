
<!------------------------------------------------------------------------------------------->
<!---> 
<!--- PowerWeb 3.0 - translated by fallenfate at RageZone (https://forum.ragezone.com/f587/)-> 
<!---> 
<!------------------------------------------------------------------------------------------->

<div class="note">
	<div class="note_title">
		Auktionen
	</div>
	<div class="note_body">
		<table class="items">
			<tr>
				<th colspan=2>Gegenst&auml;nde</td>
				<th width="95px">Preis</td>
				<th>Qty</td>
				<th width="95px">Verk&auml;ufer</td>
				<th>Item name</td>
				<th width="110px">Abgelaufen am:</td>
			</tr>
			<?php foreach ($model as $data) : ?>
			<tr class="center">
				<td width="45px" align="left"><a class="aion-item-icon-large" href="http://www.aiondatabase.com/item/<?php echo $data['item_id']; ?>" target="_blank"></a></td>
				<td align="left"><a class="aion-item-text" href="http://www.aiondatabase.com/item/<?php echo $data['item_id']; ?>"></a></td>
				<td><?php echo number_format($data['price'],0,' ',' '); ?></td>
				<td><?php echo $data['item_count']; ?></td>
				<td><a href="<?php echo Yii::app()->homeUrl.'player/'.$data['seller']; ?>"><?php echo $data['seller']; ?></a></td>
				<td><?php echo Info::race($data['brokerRace']); ?></td>
				<td><?php echo Config::datetime($data['expireTime']); ?></td>
			</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>

<div class="pages">
	<?php Config::pages($pages); ?>
</div>

<!------------------------------------------------------------------------------------------->
<!---> 
<!--- PowerWeb 3.0 - translated by fallenfate at RageZone (https://forum.ragezone.com/f587/)-> 
<!---> 
<!------------------------------------------------------------------------------------------->

<div class="note mb15">
	<div class="note_title">
		Webshop
	</div>
	<div class="note_body">
		<?php foreach ($model as $data): ?>
			<div class="shop">
				<a href="<?php echo Yii::app()->homeUrl.'webshop/'.$data->alt_name; ?>"><?php echo $data->name; ?></a>
			</div>
		<?php endforeach; ?>
	</div>
</div>

<div class="note">
	<div class="note_title">
		Purchase privileges
	</div>
	<div class="note_body">
		<?php if(Yii::app()->user->hasFlash('message')) echo Yii::app()->user->getFlash('message'); ?>
		<?php echo CHtml::beginForm(); ?>
		<div class="form"><?php echo CHtml::errorSummary($membership)?></div>
		<table class="items">
			<tr>
				<th width="20%">Title</td>
				<th width="20%">Type</td>
				<th width="20%">Duration</td>
				<th width="20%">Price</td>
				<th width="20%">Select</td>
			</tr>
		<?php foreach ($membership as $membership): ?>
			<tr class="center">
				<td><label for="Membership_id_<?php echo $membership->id; ?>"><?php echo $membership->title; ?></label></td>
				<td><?php echo Info::membership($membership->type); ?></td>
				<td><?php echo $membership->duration; ?></td>
				<td><?php echo $membership->price; ?> points</td>
				<td><input type="radio" id="Membership_id_<?php echo $membership->id; ?>" name="Membership[id]" value="<?php echo $membership->id; ?>" /></td>
			</tr>
		<?php endforeach; ?>
			<tr class="center">
				<td colspan="5"><input type="submit" name="yt0" value="Activate privileges" class="button"></td>
			</tr>
		</table>
		<?php echo CHtml::endForm(); ?>
	</div>
</div>
<?php $this->setPageTitle('Kontoverwaltung'); ?>


<div class="note">
	<div class="note-title">Kontoverwaltung</div>
	<div class="note-body">
		<?php $form=$this->beginWidget('CActiveForm'); echo @Power::message(); ?>
		<div class="table">
			<div class="row">
				<div><?php echo $form->label($post,'name'); ?></div>
				<div class="w200"><?php echo $form->textField($post,'name', array('class'=>'text')); ?></div>
				<div><?php echo $form->error($post,'name', array('class' => 'errorPopup')); ?></div>
			</div>
			<div class="row">
				<div><?php echo $form->label($post,'password'); ?></div>
				<div class="w200"><?php echo $form->passwordField($post,'password', array('class'=>'text')); ?></div>
				<div><?php echo $form->error($post,'password', array('class' => 'errorPopup')); ?></div>
			</div>
			<div class="row">
				<div><?php echo $form->label($post,'passwordConfirm'); ?></div>
				<div class="w200"><?php echo $form->passwordField($post,'passwordConfirm', array('class'=>'text')); ?></div>
				<div><?php echo $form->error($post,'passwordConfirm', array('class' => 'errorPopup')); ?></div>
			</div>
			<div class="row">
				<div></div>
				<?php echo CHtml::submitButton('Create an account', array('class'=>'button')); ?>
			</div>
		</div>
		<?php $this->endWidget(); ?>
		<div class="flash_info mt10">If you already have a game account, you can add it <a href="<?php echo @Power::url('account/add'); ?>"><b>in this</b></a> page.</div>
	</div>
</div>


<div class="note">
	<div class="note-title">Mein Konto</div>
	<div class="note-body">
		<table class="table">
			<tr>
				<th>Konto Name</th>
				<th>Gruppe</th>
				<th>Abonement</th>
				<th>Laufzeit</th>
				<th>Letzte IP</th>
				<th>Guthaben</th>
				<th width="16px"></th>
			</tr>
			<?php foreach ($accounts as $data): ?>
				<tr>
					<td><?php echo $data['name']; ?></td>
					<td><?php echo @Info::getAccessLevelIco($data['access_level']); ?></td>
					<td><?php echo @Info::getMembershipIco($data['membership']); ?></td>
					<td><?php echo @Power::date($data['expire'], 'dd.MM.yyyy, HH:mm'); ?></td>
					<td><?php echo $data['last_ip']; ?></td>
					<td><?php echo $data['money']; ?></td>
					<td><i class="btn-lock modal-show" onClick="setId(<?php echo $data['id']; ?>, '<?php echo $data['name']; ?>')" modal="modal-password" title="Change Password"></i></a></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>


<div class="note">
	<div class="note-title">Meine Charaktere</div>
	<div class="note-body">
		<table class="table">
			<tr>
				<th>Name</th>
				<th>Account</th>
				<th>Level</th>
				<th>Race</th>
				<th>Class</th>
				<th>Created by</th>
				<th>Location</th>
				<th>Inventory</th>
			</tr>
			<?php foreach ($players as $data): ?>
			<tr class="center">
				<td><a href="<?php echo @Power::url('player', $data['name']); ?>"><?php echo $data['name']; ?></a></td>
				<td><?php echo $data['account_name']; ?></td>
				<td><?php echo @Info::getLevel($data['exp']); ?></td>
				<td><?php echo @Info::getRaceIco($data['race']) ?></td>
				<td><?php echo @Info::getClassIco($data['player_class']) ?></td>
				<td><?php echo @Power::date($data['creation_date'], 'dd.MM.yyyy, HH:mm'); ?></td>
				<td><span url="<?php echo @Power::url('account/charsettings/?status=l'.$data['id']) ?>" class="ajaxbutton"><i class="<?php echo ($data['show_location'])?'show':'hide'; ?>"></i></span></td>
				<td><span url="<?php echo @Power::url('account/charsettings/?status=i'.$data['id']) ?>" class="ajaxbutton"><i class="<?php echo ($data['show_inventory'])?'show':'hide'; ?>"></i></span></td>
			</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>

<?php $this->renderPartial('_modal'); ?>

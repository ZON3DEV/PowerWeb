<?php $this->setPageTitle('Adding an Existing Account'); ?>

<div class="note">
	<div class="note-title">Adding an Existing Account</div>
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
				<div><?php $this->widget('CCaptcha', array('showRefreshButton' => false, 'clickableImage' => true)); ?></div>
				<div class="w200"><?php echo $form->textField($post,'captcha', array('class'=>'text')) ?></div>
				<div><?php echo $form->error($post,'captcha', array('class' => 'errorPopup')); ?></div>
			</div>
			<div class="row">
				<div></div>
				<?php echo CHtml::submitButton('Add account', array('class'=>'button')); ?>
			</div>
		</div>
		<?php $this->endWidget(); ?>
	</div>
</div>
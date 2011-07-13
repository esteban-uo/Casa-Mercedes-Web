<div class="images form">
<?php echo $this->Form->create('Image',array('type'=>'file'));?>
	<fieldset>
		<legend><?php __('Add Image'); ?></legend>
	<?php
		echo $this->Form->input('url',array('type'=>'file'));
		echo $this->Form->input('tipoimage_id');
		echo $this->Form->input('modified_user_id', array("type"=>"text"));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Images', true), array('action' => 'index'));?></li>
	</ul>
</div>
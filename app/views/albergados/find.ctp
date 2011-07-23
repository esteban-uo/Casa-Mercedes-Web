
<?if(empty($resultado)){ ?>
<?php echo $this->Form->create('Albergado');?>
	<fieldset>
		<legend><?php __('Buscar albergado'); ?></legend>
	<?php
		echo $this->Form->input('edad_minima');
		echo $this->Form->input('edad_maxima');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Buscar', true));?>
<? } else {?>
<? Debug($resultado); ?>
<? }?>
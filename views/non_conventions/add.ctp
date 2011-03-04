<div class="non_conventions form">
<?php echo $this->Form->create('NonConvention');?>
	<fieldset>
 		<legend><?php __('Add NonConvention'); ?></legend>
	<?php
		echo $this->Form->input('main_field');
		echo $this->Form->input('description');
		echo $this->Form->input('date', array('type' => 'date'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List NonConventions', true), array('action' => 'index'));?></li>
	</ul>
</div>
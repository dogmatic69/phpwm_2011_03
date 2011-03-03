<div class="conventions form">
<?php echo $this->Form->create('Convention');?>
	<fieldset>
 		<legend><?php __('Edit Convention'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Convention.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Convention.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Conventions', true), array('action' => 'index'));?></li>
	</ul>
</div>
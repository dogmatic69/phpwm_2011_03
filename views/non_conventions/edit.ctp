<div class="non_conventions form">
<?php echo $this->Form->create('NonConvention');?>
	<fieldset>
 		<legend><?php __('Edit NonConvention'); ?></legend>
	<?php
		echo $this->Form->input('non_convention_id');
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
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('NonConvention.non_convention_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Convention.non_convention_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List NonConventions', true), array('action' => 'index'));?></li>
	</ul>
</div>
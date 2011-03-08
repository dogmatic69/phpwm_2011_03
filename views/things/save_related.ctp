<div class="things form">
<?php echo $this->Form->create('Thing');?>
	<fieldset>
 		<legend><?php __('Add Everything'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('time_field');

		echo $this->Form->input('Convention.title');
		echo $this->Form->input('Convention.description');
		echo $this->Form->input('Convention.date');

		echo $this->Form->input('PrettyName.main_field');
		echo $this->Form->input('PrettyName.description');
		echo $this->Form->input('PrettyName.date', array('type' => 'date'));
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
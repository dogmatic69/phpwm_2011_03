<div class="things form">
<?php echo $this->Form->create('Thing');
	foreach(range(1,3) as $k => $v){
		?>
			<fieldset>
				<legend><?php echo sprintf(__('Thing %s', true), $v); ?></legend>
				<?php
					echo $this->Form->input(sprintf('Thing.%s.id', $k));
					echo $this->Form->input(sprintf('Thing.%s.name', $k));
					echo $this->Form->input(sprintf('Thing.%s.description', $k));
					echo $this->Form->input(sprintf('Thing.%s.time_field', $k));
					echo $this->Form->input(sprintf('Thing.%s.convention_id', $k));
					echo $this->Form->input(sprintf('Thing.%s.this_is_wrong', $k), array('options' => $this_is_wrong));
				?>
			</fieldset>
		<?php
	}
echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List NonConventions', true), array('action' => 'index'));?></li>
	</ul>
</div>
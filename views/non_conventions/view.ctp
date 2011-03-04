<div class="conventions view">
<h2><?php  __('NonConvention');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nonConvention['NonConvention']['non_convention_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nonConvention['NonConvention']['main_field']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nonConvention['NonConvention']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nonConvention['NonConvention']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nonConvention['NonConvention']['made']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nonConvention['NonConvention']['changed']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit NonConvention', true), array('action' => 'edit', $nonConvention['NonConvention']['non_convention_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete NonConvention', true), array('action' => 'delete', $nonConvention['NonConvention']['non_convention_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $nonConvention['NonConvention']['non_convention_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List NonConvention', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New NonConvention', true), array('action' => 'add')); ?> </li>
	</ul>
</div>

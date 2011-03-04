<div class="conventions index">
	<h2><?php __('NonConventions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Id', 'non_convention_id');?></th>
			<th><?php echo $this->Paginator->sort('Title', 'main_field');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('created', 'made');?></th>
			<th><?php echo $this->Paginator->sort('modified', 'changed');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($nonConventions as $nonConvention):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $nonConvention['NonConvention']['non_convention_id']; ?>&nbsp;</td>
		<td><?php echo $nonConvention['NonConvention']['main_field']; ?>&nbsp;</td>
		<td><?php echo $nonConvention['NonConvention']['description']; ?>&nbsp;</td>
		<td><?php echo $nonConvention['NonConvention']['date']; ?>&nbsp;</td>
		<td><?php echo $nonConvention['NonConvention']['made']; ?>&nbsp;</td>
		<td><?php echo $nonConvention['NonConvention']['changed']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $nonConvention['NonConvention']['non_convention_id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $nonConvention['NonConvention']['non_convention_id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $nonConvention['NonConvention']['non_convention_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $nonConvention['NonConvention']['non_convention_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
		<?php
			echo $this->Paginator->counter(array('format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)));
		?>
	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New NonConvention', true), array('action' => 'add')); ?></li>
	</ul>
</div>
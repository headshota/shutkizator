<div class="shutks index">
	<h2><?php __('Shutks');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('shutk_category_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('text');?></th>
			<th><?php echo $this->Paginator->sort('visible');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($shutks as $shutk):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $shutk['Shutk']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($shutk['ShutkCategory']['name'], array('controller' => 'shutk_categories', 'action' => 'view', $shutk['ShutkCategory']['id'])); ?>
		</td>
		<td><?php echo $this->Text->truncate($shutk['Shutk']['name'],30,array('ending'=>'...','exact'=>false)); ?>&nbsp;</td>
		<td><?php echo	$this->Text->truncate($shutk['Shutk']['text'],70,array('ending'=>'...','exact'=>false)); ?>&nbsp;</td>
		<td><?php echo $shutk['Shutk']['visible']; ?>&nbsp;</td>
		<td><?php echo $shutk['Shutk']['created']; ?>&nbsp;</td>
		<td><?php echo $shutk['Shutk']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $shutk['Shutk']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $shutk['Shutk']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $shutk['Shutk']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $shutk['Shutk']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

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
		<li><?php echo $this->Html->link(__('New Shutk', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Shutk Categories', true), array('controller' => 'shutk_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shutk Category', true), array('controller' => 'shutk_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
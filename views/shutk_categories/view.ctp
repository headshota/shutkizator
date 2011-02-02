<div class="shutkCategories view">
<h2><?php  __('Shutk Category');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $shutkCategory['ShutkCategory']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $shutkCategory['ShutkCategory']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Visible'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $shutkCategory['ShutkCategory']['visible']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $shutkCategory['ShutkCategory']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $shutkCategory['ShutkCategory']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shutk Category', true), array('action' => 'edit', $shutkCategory['ShutkCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Shutk Category', true), array('action' => 'delete', $shutkCategory['ShutkCategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $shutkCategory['ShutkCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shutk Categories', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shutk Category', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shutks', true), array('controller' => 'shutks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shutk', true), array('controller' => 'shutks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Shutks');?></h3>
	<?php if (!empty($shutkCategory['Shutk'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Shutk Category Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Text'); ?></th>
		<th><?php __('Visible'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($shutkCategory['Shutk'] as $shutk):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $shutk['id'];?></td>
			<td><?php echo $shutk['shutk_category_id'];?></td>
			<td><?php echo $shutk['name'];?></td>
			<td><?php echo $shutk['text'];?></td>
			<td><?php echo $shutk['visible'];?></td>
			<td><?php echo $shutk['created'];?></td>
			<td><?php echo $shutk['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'shutks', 'action' => 'view', $shutk['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'shutks', 'action' => 'edit', $shutk['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'shutks', 'action' => 'delete', $shutk['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $shutk['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Shutk', true), array('controller' => 'shutks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

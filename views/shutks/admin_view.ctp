<div class="shutks view">
<h2><?php  __('Shutk');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $shutk['Shutk']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shutk Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($shutk['ShutkCategory']['name'], array('controller' => 'shutk_categories', 'action' => 'view', $shutk['ShutkCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $shutk['Shutk']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Text'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $shutk['Shutk']['text']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Visible'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $shutk['Shutk']['visible']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $shutk['Shutk']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $shutk['Shutk']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shutk', true), array('action' => 'edit', $shutk['Shutk']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Shutk', true), array('action' => 'delete', $shutk['Shutk']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $shutk['Shutk']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shutks', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shutk', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shutk Categories', true), array('controller' => 'shutk_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shutk Category', true), array('controller' => 'shutk_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>

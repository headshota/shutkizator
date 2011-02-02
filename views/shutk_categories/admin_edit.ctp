<div class="shutkCategories form">
<?php echo $this->Form->create('ShutkCategory');?>
	<fieldset>
 		<legend><?php __('Admin Edit Shutk Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ShutkCategory.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ShutkCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Shutk Categories', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Shutks', true), array('controller' => 'shutks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shutk', true), array('controller' => 'shutks', 'action' => 'add')); ?> </li>
	</ul>
</div>
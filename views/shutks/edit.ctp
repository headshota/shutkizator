<div class="shutks form">
<?php echo $this->Form->create('Shutk');?>
	<fieldset>
 		<legend><?php __('Edit Shutk'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('shutk_category_id');
		echo $this->Form->input('name');
		echo $this->Form->input('text');
		echo $this->Form->input('visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Shutk.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Shutk.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Shutks', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Shutk Categories', true), array('controller' => 'shutk_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shutk Category', true), array('controller' => 'shutk_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
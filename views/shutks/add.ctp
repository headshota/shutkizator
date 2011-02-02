<div class="shutks form">
<?php echo $this->Form->create('Shutk');?>
	<fieldset>
 		<legend><?php __('Add Shutk'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Shutks', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Shutk Categories', true), array('controller' => 'shutk_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shutk Category', true), array('controller' => 'shutk_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
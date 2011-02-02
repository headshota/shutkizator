<div class="shutkCategories form">
<?php echo $this->Form->create('ShutkCategory');?>
	<fieldset>
 		<legend><?php __('Add Shutk Category'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Shutk Categories', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Shutks', true), array('controller' => 'shutks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shutk', true), array('controller' => 'shutks', 'action' => 'add')); ?> </li>
	</ul>
</div>
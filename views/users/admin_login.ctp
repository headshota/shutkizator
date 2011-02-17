<?php echo $this->Form->create(); ?>
	<div id="loginbox"> 	   
	  <?php echo $this->Form->input('username') ?>	
	  <?php echo $this->Form->input('password') ?>
	  <?php echo $this->Form->submit('login') ?>   
	</div>
<?php echo $this->Form->end(); ?>	
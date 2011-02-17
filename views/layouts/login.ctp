<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('CV Management: '); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php		
		echo $this->Html->css('login');

	?>
</head>
<body>
	
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

</body>
</html>
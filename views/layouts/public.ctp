<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="Randomly Generate Joke ;)" />
<meta name="keywords" content="Shutkizator, Joke, Random, Generator" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Shutkizator</title>
	<?php echo $this->Html->css('public'); ?>
	<?php echo $this->Html->css('jquery-ui-1.8.9.custom'); ?>
	
	<?php echo $this->Javascript->link('jquery-1.5.min.js'); ?>
	<?php echo $this->Javascript->link('jquery-ui-1.8.9.custom.min.js'); ?>
</head>
<body>
<?php echo $content_for_layout; ?>
</body>
</html>
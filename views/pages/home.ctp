<?php if(isset($loginURL)){ ?>
აპლიკაციის გამოსაყენებლად <a target="_top" href="<?php echo $loginURL ?>">დააკლიკეთ აქ</a>.
<?php die; } else {?>
<div id="mainBox">
	<h1 class="mainTitle"><?php echo $this->Html->image('title.gif',array('alt'=>'შუტკიზატორი','title'=>'შუტკიზატორი, ეს არის ხუმრობების (შუტკების) შემთხვევითი გენერატორი. დააკლიკე ღილაკს და მიიღე შუტკა!')) ?></h1>
	<?php echo $this->Form->create("Shutks",array('action'=>'view')) ?>
	<div class="generateBtnBox"><?php echo $this->Form->submit('generate_btn.png',array('id'=>'generateBtn')); ?></div>
	<?php echo $this->Form->end(null); ?>
	<div>
	<?php if(isset($fb_user)) {?>
	<div>გამარჯობა <?php echo $fb_user['name']; ?></div>
	<?php } ?>
</div>
</div>
<div id="shutkDialog" title="">

</div>



<?php if(isset($view_postback)&&$view_postback===true){ ?>
<!--
<div id="facebookShare">
<a target="_blank" href="http://www.facebook.com/sharer.php?u= http://garethhooper.com/articles/social-media/45-integration/145-share-on-facebook-controlling-the-text-and-images-that-are-posted-when-you-share-a-webpage-on-facebook.html" title="Share this webpage on Facebook">Share on Facebook</a>
</div>
-->
<script type="text/javascript">
			$( "#shutkDialog" ).dialog({	
				autoOpen	: false,				
				height		: 250,
				width		: 500,			
				resizable	: false
			});
			var text = '<?php echo json_encode($shutk['Shutk']['text']); ?>';
			$("#shutkDialog").html(text);
			$("#shutkDialog").dialog({ title: "<?php echo $shutk['Shutk']['name']; ?>" });
			$("#shutkDialog").dialog('open');
</script>
<?php } }

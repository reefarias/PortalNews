<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="container">

	<div class="span9" style="margin-left:0;">
		<?php echo $content; ?>
	</div>
	
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-left:0; position:relative; float:right; width:220px;">
			<?php echo TbHtml::navList(
		    	array(
		    		array('label' => 'Operations'),
		    	)
		    ); ?>
		    <?php echo TbHtml::navList(
		    	$this->menu	
			); ?>
		</div>
	</div>
		
</div>

<?php $this->endContent(); ?>
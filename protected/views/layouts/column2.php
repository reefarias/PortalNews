<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-24" style="margin-left:0; padding-left:0;">
	<div id="content" style="padding:0px;">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	
	<div class="well" style="max-width: 340px; padding: 8px 0;">
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

<?php $this->endContent(); ?>
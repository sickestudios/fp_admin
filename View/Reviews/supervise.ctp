<?php echo $this->Form->create('Review'); ?>
<div class="row">
	<div class="span12">
	<fieldset>
	<legend><?php echo __('Supervise Review'); ?></legend>
		<?php echo $this->Form->input('id'); ?>
			<div class="row">
				<div class="span12 well"	>
					<h4>Cover title: <?php echo $this->request->data['Cover']['title']; ?></h4>
					<?php echo $this->Html->image($this->data['Cover']['image'],array('class'=>'img-polaroid')); ?>
					<br><br>
				</div>
				<div class="span12 well">
					<h4>Cover title for this language: <?php echo $this->request->data['Review']['title']; ?></h4>
					
				</div>
				<div class="span12 well">
					<h4>Cover url for this language: <?php echo $this->request->data['Review']['url']; ?></h4>
				</div>
				<div class="span12 well">
					<h4>Feature: <?php echo $this->request->data['Review']['feature']; ?></h4>
				</div>
				<div class="span12 well">
					<h4>Description: <?php echo str_replace(" ","-",$this->request->data['Review']['description']); ?></h4>
				</div>

				<?php //echo $this->Form->input('languageid',array('type'=>'hidden','class'=>'span6','value'=>$this->request->params['pass'][1])); ?>
				<?php //echo $this->Form->input('pageid',array('type'=>'hidden','class'=>'span6','value'=>$this->request->params['pass'][2])); ?>
			</div>
	</fieldset>
	</div>
	<div class="row">
		<div class="span3"><?php echo $this->Html->link('Reject',array('controller'=>'reviews','action'=>'index','status'=>'waiting-supervision'),array('class'=>'btn btn-danger span2')); ?></div>
		<div class="buttonSub span3"><button type='submit' class='btn btn-success span3'>Sent to Supervise</button></div>
	</div>
</div>
<?php echo $this->Form->end(); ?>

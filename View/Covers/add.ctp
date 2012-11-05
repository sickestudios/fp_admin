<div class="row">
		<div class="span9 offset1">
			
		</div>
		<?php echo $this->Form->create('Cover'); ?>
		<div class="span9 offset1">
			<fieldset>
			<legend><?php echo __('Add Cover'); ?></legend>
		</div>
		<div class="span9 offset1">
			<div class="row">
				<div class="span5"><?php echo $this->Form->input('title',array('class'=>'span5')); ?></div>							
				<div class="span1">
					<?php echo $this->Form->input('score',
						array(
							'type' => 'select',
							'options' => array('--', '1', '2', '3', '4', '5'),
							'class'=>'span1'
							)
						);
					?>
				</div>				
				<div class="span8"><?php echo $this->Form->input('image',array('class'=>'span8')); ?></div>
				<div class="span8"><?php echo $this->Form->input('language_id',array('class'=>'span8')); ?></div>
				<div class="span9"><?php echo $this->Form->input('Categorytype',array('type' => 'select', 'multiple' => 'checkbox')); ?></div>
				<div class="span9">
					</fieldset>
					<div class="well">
						<button type="submit" class="btn btn-primary span8">Submit</button>
						<?php echo $this->Form->input('published', array('type'=>'hidden','value'=>'1')); ?>
						<?php echo $this->Form->input('view', array('type'=>'hidden','value'=>'0')); ?>
						<?php echo $this->Form->end(); ?>
					</div>				
				</div>	
			</div>
		</div>
</div>


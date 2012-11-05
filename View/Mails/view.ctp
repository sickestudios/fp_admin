<div class="container">
	<div class="row">	
		<div class="span12"><div class="well"><strong>Name: </strong><?php echo h($mail['Mail']['name']); ?></div></div>
		<div class="span12"><div class="well"><strong>Email: </strong><?php echo h($mail['Mail']['email']); ?></div></div>
		<div class="span12"><div class="well"><strong>Subject: </strong><?php echo h($mail['Mail']['subject']); ?></div></div>
		<div class="span12"><div class="well"><strong>Created: </strong><?php echo h($mail['Mail']['created']); ?></div></div>
		<div class="span12"><div class="well"><strong>Message: </strong><?php echo h($mail['Mail']['message']); ?></div></div>
		<div class="span12">
			<ul>
				<li><?php echo $this->Form->postLink(__('Delete Mail'), array('action' => 'delete', $mail['Mail']['id']), null, __('Are you sure you want to delete # %s?', $mail['Mail']['id'])); ?></li>
				<li><?php echo $this->Html->link(__('List Mails'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
</div>





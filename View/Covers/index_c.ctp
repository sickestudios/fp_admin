<div class="row">
	<div class="span12">
		<table class="table table-striped">
			<caption><?php echo __('Covers list'); ?></caption>
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>				
      				<th><?php echo $this->Paginator->sort('title'); ?></th>
      				<th><?php echo $this->Paginator->sort('score'); ?></th>
      				<th><?php echo $this->Paginator->sort('image'); ?></th>
      				<th><?php echo $this->Paginator->sort('created'); ?></th>
      				<th><?php echo $this->Paginator->sort('language_id'); ?></th>
      				<th><?php echo __('Actions'); ?></th>
 		   		</tr>
 	 		</thead>
  			<tbody>
  				<?php foreach ($covers as $cover): ?>
   		 		<tr>
   		 			<td><strong><?php echo h($cover['Cover']['id']); ?></strong></td>
   		 			<td><?php echo h($cover['Cover']['title']); ?></td>
   		 			<td><?php echo h($cover['Cover']['score']); ?></td>
   	   				<td><?php echo $this->Html->image(str_replace('/s1600/','/s90/',$cover['Cover']['image']),array('class'=>'img-polaroid')); ?></td>
   	   				<td><?php echo h($cover['Cover']['created']); ?></td>
   	   				<td><?php echo $this->Html->image('flag_'.$cover['Language']['isocode'].'.png'); ?></td>
   	   				<td>
   	   					<?php echo $this->Html->link('<i class="icon-edit icon-white"></i>',array('controller'=>'covers','action'=>'edit',$cover['Cover']['id']),array('class'=>'btn btn-primary','escape'=>false))?>
   	   					
   	   					<?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i>', array('action' => 'delete', $cover['Cover']['id']), array('class'=>'btn btn-danger','escape'=>false), __('Are you sure you want to delete # %s?', $cover['Cover']['title'])); ?>
   	   				</td>
    			</tr>
    			<?php endforeach; ?>
  			</tbody>
		</table>
	</div>
	<div class="row">
		<div class="span12">
			<?php
		    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		    echo " ";
		    echo $this->Paginator->numbers(array('separator' => ' - '));
		    echo " ";
		    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		    ?>
    	</div>
	</div>
</div>
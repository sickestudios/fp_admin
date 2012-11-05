<div class="row">
	<div class="span12">
		<table class="table table-striped">
			<caption><?php echo __('Covers list'); ?></caption>
			<thead>
				<tr>
					<th></th>				
      				<th><?php echo $this->Paginator->sort('title'); ?></th>
      				<th><?php echo $this->Paginator->sort('score'); ?></th>
      				<th><?php echo $this->Paginator->sort('created'); ?></th>
      				<th><?php echo $this->Paginator->sort('language_id'); ?></th>
      				<th><?php echo __('Actions'); ?></th>
 		   		</tr>
 	 		</thead>
  			<tbody>
  				<?php foreach ($covers as $cover): ?>
   		 		<tr>
   	   				<td><?php echo $this->Html->image(str_replace('/s1600/','/s90/',$cover['Cover']['image']),array('class'=>'img-polaroid')); ?></td>
   	   				<td><?php echo h($cover['Cover']['title']); ?>
   	   					<br>
   	   						<em class="muted">
   	   							<?php if(array_key_exists($cover['Cover']['id'],$reviews)):?>
   	   								<?php $review_id=$cover['Cover']['id']; ?>
   	   									<?php echo key($reviews[$review_id]); ?>
   	   							<?php endif;?>
   	   						</em>
   	   				</td>
   	   				<td><?php echo h($cover['Cover']['score']); ?></td>
   	   				<td><?php echo h($cover['Cover']['created']); ?></td>
   	   				<td><?php echo $this->Html->image('flag_'.$cover['Language']['isocode'].'.png'); ?></td>
   	   				<td>
   	   					<?php if (empty($this->request->params['named'])) { $page = 1; } else { $page = $this->request->params['named']['page']; }?>
   	   					<?php if(array_key_exists($cover['Cover']['id'],$reviews)):?>
   	   						
   	   						<?php $review_id=$cover['Cover']['id']; ?>
   	   						<?php if($reviews[$review_id][key($reviews[$review_id])] == 'pending'):?>
   	   							<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> Modify',array('controller'=>'reviews','action'=>'edit',$review_codes[$cover['Cover']['id']],$this->request->params['pass'][0],$page),array('escape' => false,'class'=>'btn btn btn-warning')); ?>
   	   						<?php else: ?>
   	   							<?php //--- ?>
   	   						<?php endif;?>
   	   					<?php else: ?>
   	   						<?php echo $this->Html->link('<i class="icon-pencil icon-white"></i> Write',array('controller'=>'reviews','action'=>'add',$cover['Cover']['id'],$this->request->params['pass'][0],$page),array('escape' => false,'class'=>'btn btn-primary')); ?>
   	   					<?php endif;?>
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
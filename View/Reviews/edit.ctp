<?php echo $this->Form->create('Review'); ?>
<div class="row">
	<div class="span12">
	<fieldset>
	<legend><?php echo __('Edit Review'); ?></legend>
		<?php echo $this->Form->input('id'); ?>
			<div class="row">
				<div class="span12">
					<h3	>Cover title: <?php echo $this->request->data['Cover']['title']; ?></h3>
				</div>
				<div class="span12">
					<?php echo $this->Html->image($this->data['Cover']['image'],array('class'=>'img-polaroid')); ?>
					<br><br>
				</div>
				<?php 
				if($this->data['Review']['published']==1) {
					$on_disabled='disabled';
				} else {
					$on_disabled='';
				}
				?>
				<div class="span12"><?php echo $this->Form->input('title',array('label' => 'Cover title for this language',$on_disabled,'class'=>'span6','maxlength'=>66)); ?></div>
				<div class="span12"><?php echo $this->Form->input('url',array('label' => 'Cover url for this language',$on_disabled,'class'=>'span6','maxlength'=>47)); ?></div>
				<div class="span1"><?php echo $this->Form->input('feature'); ?></div>
				<div class="span12"><?php echo $this->Form->input('description',array('type'=>'textarea','class'=>'reviewDescription span6','maxlength'=>158)); ?></div>
				<div class="span12">
					<div><span class='textCharacters label label-info'></span></div>					
					<br>
				</div>
				<?php echo $this->Form->input('languageid',array('type'=>'hidden','class'=>'span6','value'=>$this->request->params['pass'][1])); ?>
				<?php echo $this->Form->input('pageid',array('type'=>'hidden','class'=>'span6','value'=>$this->request->params['pass'][2])); ?>
				
			</div>
	</fieldset>
	</div>
	<div class="row">
		<div class="span3"><?php echo $this->Html->link('Cancel',array('controller'=>'covers','action'=>'index',$this->data['Language']['id'],'page'=>$this->request->params['pass'][2]),array('class'=>'btn btn-danger span2')); ?></div>
		<div class="buttonSub span3"></div>
	</div>
</div>
<?php echo $this->Form->end(); ?>
<script type="text/javascript">
jQuery.fn.stringToSlug=function(options){var defaults={setEvents:'keyup keydown blur',getPut:'#permalink',space:'-',prefix:'',suffix:'',replace:''};var opts=jQuery.extend(defaults,options);jQuery(this).bind(defaults.setEvents,function(){var text=jQuery(this).val();text=defaults.prefix+text+defaults.suffix;text=text.replace(defaults.replace,"");text=jQuery.trim(text.toString());var chars=[];for(var i=0;i<32;i++){chars.push('')}chars.push(defaults.space);chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push("");chars.push(defaults.space);chars.push(defaults.space);chars.push('');chars.push('');chars.push(defaults.space);chars.push(defaults.space);chars.push(defaults.space);chars.push(defaults.space);chars.push('0');chars.push('1');chars.push('2');chars.push('3');chars.push('4');chars.push('5');chars.push('6');chars.push('7');chars.push('8');chars.push('9');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('A');chars.push('B');chars.push('C');chars.push('D');chars.push('E');chars.push('F');chars.push('G');chars.push('H');chars.push('I');chars.push('J');chars.push('K');chars.push('L');chars.push('M');chars.push('N');chars.push('O');chars.push('P');chars.push('Q');chars.push('R');chars.push('S');chars.push('T');chars.push('U');chars.push('V');chars.push('W');chars.push('X');chars.push('Y');chars.push('Z');chars.push(defaults.space);chars.push(defaults.space);chars.push(defaults.space);chars.push('');chars.push(defaults.space);chars.push('');chars.push('a');chars.push('b');chars.push('c');chars.push('d');chars.push('e');chars.push('f');chars.push('g');chars.push('h');chars.push('i');chars.push('j');chars.push('k');chars.push('l');chars.push('m');chars.push('n');chars.push('o');chars.push('p');chars.push('q');chars.push('r');chars.push('s');chars.push('t');chars.push('u');chars.push('v');chars.push('w');chars.push('x');chars.push('y');chars.push('z');chars.push(defaults.space);chars.push('');chars.push(defaults.space);chars.push('');chars.push('');chars.push('C');chars.push('A');chars.push('');chars.push('f');chars.push('');chars.push('');chars.push('T');chars.push('t');chars.push('');chars.push('');chars.push('S');chars.push('');chars.push('CE');chars.push('A');chars.push('Z');chars.push('A');chars.push('A');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push(defaults.space);chars.push(defaults.space);chars.push('');chars.push('TM');chars.push('s');chars.push('');chars.push('ae');chars.push('A');chars.push('z');chars.push('Y');chars.push('');chars.push('');chars.push('c');chars.push('L');chars.push('o');chars.push('Y');chars.push('');chars.push('S');chars.push('');chars.push('c');chars.push('a');chars.push('');chars.push('');chars.push('');chars.push('r');chars.push(defaults.space);chars.push('o');chars.push('');chars.push('2');chars.push('3');chars.push('');chars.push('u');chars.push('p');chars.push('');chars.push('');chars.push('1');chars.push('o');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('A');chars.push('A');chars.push('A');chars.push('A');chars.push('A');chars.push('A');chars.push('AE');chars.push('C');chars.push('E');chars.push('E');chars.push('E');chars.push('E');chars.push('I');chars.push('I');chars.push('I');chars.push('I');chars.push('D');chars.push('N');chars.push('O');chars.push('O');chars.push('O');chars.push('O');chars.push('O');chars.push('x');chars.push('O');chars.push('U');chars.push('U');chars.push('U');chars.push('U');chars.push('Y');chars.push('D');chars.push('B');chars.push('a');chars.push('a');chars.push('a');chars.push('a');chars.push('a');chars.push('a');chars.push('ae');chars.push('c');chars.push('e');chars.push('e');chars.push('e');chars.push('e');chars.push('i');chars.push('i');chars.push('i');chars.push('i');chars.push('o');chars.push('n');chars.push('o');chars.push('o');chars.push('o');chars.push('o');chars.push('o');chars.push('');chars.push('o');chars.push('u');chars.push('u');chars.push('u');chars.push('u');chars.push('y');chars.push('');chars.push('y');chars.push('z');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('C');chars.push('c');chars.push('D');chars.push('d');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('E');chars.push('e');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('N');chars.push('n');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('R');chars.push('r');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('S');chars.push('s');chars.push('');chars.push('');chars.push('T');chars.push('t');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('U');chars.push('u');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('');chars.push('Z');chars.push('z');for(var i=256;i<100;i++){chars.push('')}var stringToSlug=new String();for(var i=0;i<text.length;i++){stringToSlug+=chars[text.charCodeAt(i)]}stringToSlug=stringToSlug.replace(new RegExp('\\'+defaults.space+'{2,}','gmi'),defaults.space);stringToSlug=stringToSlug.replace(new RegExp('(^'+defaults.space+')|('+defaults.space+'$)','gmi'),'');stringToSlug=stringToSlug.toLowerCase();jQuery(defaults.getPut).val(stringToSlug);jQuery(defaults.getPut).html(stringToSlug);return this});return this}
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".textCharacters").text("0 / 158");
		$(".buttonSub").html ("<button type='button' class='btn btn-primary disabled span3'>Sent to Supervise</button>");

		$("#input_url").stringToSlug();	
	});
	$(document).keyup(function() {
		var textVal = $(".reviewDescription").val();
		var textCharacters = textVal.length;
		$(".textCharacters").text(textCharacters+" / 158");
		if(textCharacters>155) {
			$(".buttonSub").html ("<button type='submit' class='btn btn-primary span3'>Sent to Supervise</button>");
		} else {
			$(".buttonSub").html ("<button type='button' class='btn btn-primary disabled span3'>Sent to Supervise</button>");
		}
	});
</script>

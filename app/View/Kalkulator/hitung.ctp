<?php echo $this->Form->create('kalkulator'); ?>
<?php echo $this->Form->input('angka1'); ?>
<?php echo $this->Form->input('angka2'); ?>
<?php echo $this->Form->input('operator', array('options' => $oper)); ?>
<?php echo $this->Form->end('Submit'); ?>
<?php
		echo $this->Form->create('Category');
		echo $this->Form->input('name');
		echo $this->Form->input('price');
		echo $this->Form->input('nyuci_share');
		echo $this->Form->input('status', array('options' => array(0,1), 'empty' => ('choose one')))
?>
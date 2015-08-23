<?php
	echo
	$this->Form->create ('Login', array('style' => 'text-align: center; width:100%')),
	$this->Html->image('logo.png', array('width' => '300px', 'heigth' => '300px', 'style' => 'text-align: center;')),
	'<h1>LOBOSIG</h1>',
	$this->Form->input ( 'usuario', array (
			'label' => false,
			'type' => 'text',
			'placeholder' => 'Usuario'
	) ), $this->Form->input ( 'senha', array (
			'label' => false,
			'type' => 'password',
			'placeholder' => 'Senha'
	) ), $this->Form->end ( 'Entrar' );
?>
<?php
	echo
		$this->Html->link ( 'Aluno', array (
				'controller' => 'Coordenacaos',
				'action' => 'Aluno' 
		), array (
				'class' => 'menu' 
		) ),
		$this->Html->link ( 'Funcionário', array (
				'controller' => 'Coordenacaos',
				'action' => 'Funcionario' 
		), array (
				'class' => 'menu' 
		) ),
		$this->Html->link ( 'Disciplina', array (
				'controller' => 'Coordenacaos',
				'action' => 'Disciplina'
		), array (
				'class' => 'menu' 
		) ),
		$this->Html->link ( 'Vincular Professor', array (
				'controller' => 'Coordenacaos',
				'action' => 'Vinculo'
		), array (
				'class' => 'menu' 
		) ),
		$this->Html->link ( 'Turma', array (
				'controller' => 'Coordenacaos',
				'action' => 'Turma'
		), array (
				'class' => 'menu' 
		) ),
		$this->Html->link ( 'Sair', array (
				'controller' => 'Autenticacaos',
				'action' => 'logout'
		), array (
				'class' => 'logout' 
		) );
?>
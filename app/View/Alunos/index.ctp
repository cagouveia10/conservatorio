<?php 
	echo
		$this->Html->link ( 'Visualizar Horarios', array (
				'controller' => 'Alunos',
				'action' => 'Horario'
		), array (
				'class' => 'menu' 
		) ), $this->Html->link ( 'Visualizar Notas e Frequencia', array (
				'controller' => 'Alunos',
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
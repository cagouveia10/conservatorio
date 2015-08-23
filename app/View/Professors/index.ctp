<?php
	echo
		$this->Html->link ( 'Visualizar Horarios', array (
				'controller' => 'Professors',
				'action' => 'Horario' 
		), array (
				'class' => 'menu' 
		) ), $this->Html->link ( 'Lançar Notas e Frequencia', array (
				'controller' => 'Professors',
				'action' => 'SelecionarTurma' 
		), array (
				'class' => 'menu' 
		) ), $this->Html->link ( 'Sair', array (
				'controller' => 'Autenticacaos',
				'action' => 'logout'
		), array (
				'class' => 'logout' 
		) );
?>
<?php
	echo 
		$this->Html->link ( 'Novo Funcionário', array (
			'controller' => 'Coordenacaos',
			'action' => 'NovoFuncionario' 
		), array (
				'class' => 'btn btn-primary' 
		) ), '<br /><br /><table>',
	$this->Html->tableHeaders(array('Nome', 'Opções', ''));
	foreach ( $funcionario as $funcionario ) :
		echo 
			$this->Html->tableCells ( array (
				array (
						$funcionario ['Funcionario'] ['nome'],
						$this->Html->link ( 'Editar Funcionario', array (
								'controller' => 'Coordenacaos',
								'action' => 'EditarFuncionario',
								$funcionario ['Funcionario'] ['id'] 
						) ),
						$this->Html->link ( 'Excluir Funcionario', array (
								'controller' => 'Coordenacaos',
								'action' => 'ExcluirFuncionario',
								$funcionario ['Funcionario'] ['id'] 
						) ) 
				) 
		) );
	endforeach;
	echo
		'</table>',
		$this->Html->link ( 'voltar', array (
				'controller' => 'Coordenacaos',
				'action' => 'Index' 
		), array (
				'class' => 'btn btn-back' 
		) );
?>
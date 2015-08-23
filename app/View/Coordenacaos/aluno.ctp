<?php
	echo 
		$this->Html->link ( 'Novo Aluno', array (
			'controller' => 'Coordenacaos',
			'action' => 'NovoAluno' 
		), array (
				'class' => 'btn btn-primary' 
		) ),
	'<br /><br /><table>',
	$this->Html->tableHeaders(array('Nome', 'Matricula', 'Opções', ''));
	foreach ( $aluno as $aluno ) :
		echo 
			$this->Html->tableCells ( array (
				array (
						$aluno ['Aluno'] ['nome'],
						$aluno ['Aluno'] ['matricula'],
						$this->Html->link ( 'Editar Aluno', array (
								'controller' => 'Coordenacaos',
								'action' => 'EditarAluno',
								$aluno ['Aluno'] ['id'] 
						) ),
						$this->Html->link ( 'Excluir Aluno', array (
								'controller' => 'Coordenacaos',
								'action' => 'ExcluirAluno',
								$aluno ['Aluno'] ['id'] 
						) ) 
				) 
		) );
	endforeach;
	echo
		'</table>',
		$this->Html->link ( 'Voltar', array (
				'controller' => 'Coordenacaos',
				'action' => 'Index' 
		), array (
				'class' => 'btn btn-back' 
		) );
?>
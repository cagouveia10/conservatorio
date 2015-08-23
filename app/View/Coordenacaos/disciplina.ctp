<?php
	echo 
		$this->Html->link ( 'Nova Disciplina', array (
			'controller' => 'Coordenacaos',
			'action' => 'NovaDisciplina' 
		), array (
				'class' => 'btn btn-primary' 
		) ), '<br /><br /><table>',
	$this->Html->tableHeaders(array('Disciplinas', 'Opções', ''));
	foreach ( $disciplina as $disciplina ) :
		echo 
			$this->Html->tableCells ( array (
				array (
						$disciplina ['Disciplina'] ['nome'],
						$this->Html->link ( 'Editar Disciplina', array (
								'controller' => 'Coordenacaos',
								'action' => 'EditarDisciplina',
								$disciplina ['Disciplina'] ['id'] 
						) ),
						$this->Html->link ( 'Excluir Disciplina', array (
								'controller' => 'Coordenacaos',
								'action' => 'ExcluirDisciplina',
								$disciplina ['Disciplina'] ['id'] 
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
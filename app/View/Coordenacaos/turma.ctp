<?php
	echo 
		$this->Html->link ( 'Nova Turma', array (
			'controller' => 'Coordenacaos',
			'action' => 'NovaTurma' 
		), array (
				'class' => 'btn btn-primary' 
		) ),
	'<br /><br /><table>',
	$this->Html->tableHeaders(array('Turma', 'Opções', ''));
	foreach ( $turma as $turma ) :
		echo 
			$this->Html->tableCells ( array (
				array (
						$turma ['Turma'] ['nome'],
						$this->Html->link ( 'Excluir Turma', array (
								'controller' => 'Coordenacaos',
								'action' => 'ExcluirTurma',
								$turma ['Turma'] ['id'] 
						) ),
						$this->Html->link ( 'Consultar', array (
								'controller' => 'Coordenacaos',
								'action' => 'VisualizarMatricula',
								$turma ['Turma']['id']
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
<?php
	echo '<h3>Horário das Aulas</h3>', '<table>',
	$this->Html->tableHeaders(array('Turma', 'Sala', 'Hora', 'Dia'));
	foreach ( $turma as $turma ) :
			echo 
				$this->Html->tableCells ( array (
					array (
							$turma ['Turma'] ['nome'],
							$turma ['Turma'] ['sala'],
							$turma ['Turma'] ['horaaula'],
							$turma ['Turma'] ['diaaula']
					)
			) );
	endforeach;
	echo
		'</table><br />',
		$this->Html->link ( 'voltar', array (
				'controller' => 'Professors',
				'action' => 'Index' 
		), array (
				'class' => 'btn btn-back' 
		) );
?>
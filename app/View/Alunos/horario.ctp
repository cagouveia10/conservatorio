<?php
	echo '<h3>Horário das Aulas</h3>', '<table>',
	$this->Html->tableHeaders(array('Turma', 'Sala', 'Hora', 'Dia'));
	$count = count($idturm);
	
	foreach ( $turma as $k => $turma ){
		if ($count == $k) break; 	//PARA QND O TAMANHO DO VETOR ATINGE
		if($turma['Turma']['id'] == $idturm[$k])
			echo $this->Html->tableCells ( array (
				array (
						$turma ['Turma'] ['nome'],
						$turma ['Turma'] ['sala'],
						$turma ['Turma'] ['horaaula'],
						$turma ['Turma'] ['diaaula']
				) 
		) );
	}
	echo
		'</table><br />',
		$this->Html->link ( 'voltar', array (
				'controller' => 'Alunos',
				'action' => 'Index' 
		), array (
				'class' => 'btn btn-back' 
		) );
?>
<?php
	echo $this->Html->link ( 'Realizar Matricula', array (
			'controller' => 'Coordenacaos',
			'action' => 'Matricula',
			$id
	), array (
				'class' => 'btn btn-primary' 
		) ),
	'<br /><br /><table>',
	$this->Html->tableHeaders(array('Nome', 'Opções'));

	if (empty($tab_matricula)) {
		echo $this->Html->div('error', 'Não há alunos cadastrados nessa turma!');
	}
	else {
	echo '<table>';
		foreach ( $tab_matricula as $tab_matricula ) :
				echo $this->Html->tableCells ( array (
					array (
						$tab_matricula ['Matricula']['nomealuno'],
						$this->Html->link ( 'Desmatricular', array (
								'controller' => 'Coordenacaos',
								'action' => 'Desmatricular',
								$tab_matricula ['Matricula']['idaluno'],
								$id
						) )
					)
				) );
		endforeach;
		echo '</table><br />';
	}
	echo $this->Html->link ( 'voltar', array (
			'controller' => 'Coordenacaos',
			'action' => 'Turma' 
	), array (
				'class' => 'btn btn-back' 
	) );
?>
<?php
	echo '<h3>Notas e Frequencias</h3>','<table>',
	$this->Html->tableHeaders ( array (
			'Nome',
			'1º Bi - Faltas',
			'1º Bi - Notas',
			'2º Bi - Faltas',
			'2º Bi - Notas',
			'3º Bi - Faltas',
			'3º Bi - Notas',
			'4º Bi - Faltas',
			'4º Bi - Notas',
			'Total de Faltas',
			'Total de Notas',
			'Resultado Final',
	) );
	$count = count($idturm);
	foreach ( $avaliacao as $k => $avaliacao ){
		if ($count == $k) break; 	//PARA QND O TAMANHO DO VETOR ATINGE
		if($avaliacao['Avaliacao']['idturm'] == $idturm[$k])
			echo 
				$this->Html->tableCells ( array (
					$turma[$k]['Turma']['nome'],
					$avaliacao['Avaliacao']['b1faltas'],
					$avaliacao['Avaliacao']['b1notas'],
					$avaliacao['Avaliacao']['b2faltas'],
					$avaliacao['Avaliacao']['b2notas'],
					$avaliacao['Avaliacao']['b3faltas'],
					$avaliacao['Avaliacao']['b3notas'],
					$avaliacao['Avaliacao']['b4faltas'],
					$avaliacao['Avaliacao']['b4notas'],
					$avaliacao['Avaliacao']['ffaltas'],
					$avaliacao['Avaliacao']['fnotas'],
					$avaliacao['Avaliacao']['resultadofinal'],
				) );
	}
	echo '</table><br />',
		$this->Html->link ( 'voltar', array (
				'controller' => 'Alunos',
				'action' => 'Index' 
		), array (
				'class' => 'btn btn-back' 
		) );
?>
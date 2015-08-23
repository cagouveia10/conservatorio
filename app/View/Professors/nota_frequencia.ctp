<?php
	echo '<h3>Lançar Notas e Frequencias</h3>','<table>', 
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
	$count = count($idaluno);
	foreach ( $avaliacao as $k => $avaliacao ){
		if ($count == $k) break; 	//PARA QND O TAMANHO DO VETOR ATINGE
		if($avaliacao['Avaliacao']['idaluno'] == $idaluno[$k])
			echo $this->Form->create ( 'Avaliacao' ),
				$this->Form->input('Avaliacao.id', array(
						'value' => $avaliacao['Avaliacao']['id'],
						'type' => 'hidden',
				) ),
				$this->Form->input('Avaliacao.idaluno', array(
						'value' => $avaliacao['Avaliacao']['idaluno'],
						'type' => 'hidden',
				) ), 
				$this->Html->tableCells ( array (
					$aluno[$k]['Aluno']['nome'],
					$this->Form->input('Avaliacao.b1faltas', array(
							'value' => $avaliacao['Avaliacao']['b1faltas'],
							'type' => 'text',
							'div' => false,
							'label' => false
					) ), $this->Form->input('Avaliacao.b1notas', array(
							'value' => $avaliacao['Avaliacao']['b1notas'],
							'type' => 'text',
							'div' => false,
							'label' => false
					) ), $this->Form->input('Avaliacao.b2faltas', array(
							'value' => $avaliacao['Avaliacao']['b2faltas'],
							'type' => 'text',
							'div' => false,
							'label' => false
					) ), $this->Form->input('Avaliacao.b2notas', array(
							'value' => $avaliacao['Avaliacao']['b2notas'],
							'type' => 'text',
							'div' => false,
							'label' => false
					) ), $this->Form->input('Avaliacao.b3faltas', array(
							'value' => $avaliacao['Avaliacao']['b3faltas'],
							'type' => 'text',
							'div' => false,
							'label' => false
					) ), $this->Form->input('Avaliacao.b3notas', array(
							'value' => $avaliacao['Avaliacao']['b3notas'],
							'type' => 'text',
							'div' => false,
							'label' => false
					) ), $this->Form->input('Avaliacao.b4faltas', array(
							'value' => $avaliacao['Avaliacao']['b4faltas'],
							'type' => 'text',
							'div' => false,
							'label' => false
					) ), $this->Form->input('Avaliacao.b4notas', array(
							'value' => $avaliacao['Avaliacao']['b4notas'],
							'type' => 'text',
							'div' => false,
							'label' => false
					) ), $this->Form->input('Avaliacao.ffaltas', array(
							'value' => $avaliacao['Avaliacao']['ffaltas'],
							'type' => 'text',
							'div' => false,
							'label' => false
					) ), $this->Form->input('Avaliacao.fnotas', array(
							'value' => $avaliacao['Avaliacao']['fnotas'],
							'type' => 'text',
							'div' => false,
							'label' => false
					) ), $this->Form->input('Avaliacao.resultadofinal', array(
							'value' => $avaliacao['Avaliacao']['resultadofinal'],
							'type' => 'text',
							'div' => false,
							'label' => false
					) ),
					$this->Form->end('Lançar Notas'),
			) );
	}
	echo '</table><br />',
		$this->Html->link ( 'voltar', array (
				'controller' => 'Professors',
				'action' => 'Index' 
		), array (
				'class' => 'btn btn-back' 
		) );
?>
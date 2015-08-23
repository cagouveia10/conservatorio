<?php
	echo '<h3>Selecione a turma</h3>',
	$this->Form->create('Turma'),
	$this->Form->label ('Turma'),
	'<select class="select" name="data[Turma][id]" id="TurmaId">
	             <option value=" "></option>';
				foreach ( $turma as $turma )
					echo '<option value="'.$turma['Turma']['id']. '">' .$turma['Turma']['nome']. '</option>';
				echo '</select>',
		
		$this->Form->end ( 'Consultar' ),
		$this->Html->link ( 'voltar', array (
				'controller' => 'Professors',
				'action' => 'Index' 
		), array (
				'class' => 'btn btn-back' 
		) );
?>
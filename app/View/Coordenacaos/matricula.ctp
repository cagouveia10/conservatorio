<?php
	echo 
		'<h3>Matricular Aluno</h3>',
		$this->Form->create ( 'Matricula' ),
		$this->Form->label ('Aluno'),
		'<select class="select" name="data[Matricula][idaluno]" id="MatriculaIdaluno">
             <option value=" "></option>';
		foreach ( $nomealuno as $aluno )
		if (!empty($aluno)){
			echo '<option value="'.$aluno['Aluno']['id']. '">' .$aluno['Aluno']['nome']. '</option>';
		}
		echo '</select>',
		$this->Form->end ( 'Matricular' );
	
	echo 
		$this->Html->link ( 'voltar', array (
			'controller' => 'Coordenacaos',
			'action' => 'Turma'
		), array (
				'class' => 'btn btn-back' 
		) );
?>
<?php
	echo
		'<h3>Vincular Professor/Disciplina</h3>',
		$this->Form->create ( 'Vinculo' ),
		$this->Form->label ('Professor'),
		'<select class="select" name="nomeprof">
             <option value=" "></option>';
			foreach ( $prof as $prof )
				echo '<option value="' . $prof['Funcionario']['nome'] . '">' . $prof['Funcionario']['nome'] . '</option>';
		echo '</select><br />';
		
		echo $this->Form->label ('Disciplina'),
		'<select class="select" name="nomedisc">
             <option value=" "></option>';
		foreach ( $disciplina as $disciplina )
			if (!empty($disciplina)){
				echo '<option value="'.$disciplina['Disciplina']['nome']. '">' .$disciplina['Disciplina']['nome']. '</option>';
			}
		echo '</select>';
		
		echo '<br />', $this->Form->end ( 'Cadastrar' ),
		$this->Html->link ( 'voltar', array (
				'controller' => 'Coordenacaos',
				'action' => 'Vinculo' 
		), array (
				'class' => 'btn btn-back' 
		) );
?>
<?php

	if ( empty($professor) || empty($disciplina) ){
	}
	
	else {

	echo
		'<h3>Nova Turma</h3>',
		$this->Form->create ( 'Turma' ),
		$this->Form->input ( 'nome', array (
				'label' => false,
				'type' => 'text',
				'placeholder' => 'Nome'
		) ), $this->Form->label ('Professor'),
		'<select class="select" name="data[Turma][masp]" id="TurmaMasp">
             <option value=" "></option>';
		foreach ( $professor as $professor )
			echo '<option value="'.$professor['Funcionario']['masp']. '">' .$professor ['Funcionario'] ['nome']. '</option>';
		echo '</select><br />',
		
		$this->Form->label ('Disciplina'),
		'<select class="select" name="data[Turma][coddisc]" id="TurmaCoddisc">
             <option value=" "></option>';
		foreach ( $disciplina as $disciplina )
		if (!empty($disciplina)){
			echo '<option value="'.$disciplina['Disciplina']['id']. '">' .$disciplina['Disciplina']['nome']. '</option>';
		}
		echo '</select><br />',
		$this->Form->input ( 'sala', array (
				'label' => false,
				'type' => 'number',
				'placeholder' => 'Sala'
		) ), $this->Form->input ( 'horaaula', array (
				'label' => false,
				'type' => 'text',
				'placeholder' => 'Horario da Aula, ex: 22:30'
		) ); $options = array(
				'Segunda-Feira' => 'Segunda-Feira',
				'Terça-Feira' => 'Terça-Feira',
				'Quarta-Feira' => 'Quarta-Feira',
				'Quinta-Feira' => 'Quinta-Feira',
				'Sexta-Feira' => 'Sexta-Feira',
		); echo $this->Form->label ('Dia da Semana'),
		$this->Form->select('diaaula', $options),	
		'<br /><br />', $this->Form->end ( 'Cadastrar' );
		
	}
		echo $this->Html->link ( 'voltar', array (
				'controller' => 'Coordenacaos',
				'action' => 'Turma' 
		), array (
				'class' => 'btn btn-back' 
		) );
?>
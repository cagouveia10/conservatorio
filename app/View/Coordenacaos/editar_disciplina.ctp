<?php
	echo 
		$this->Form->create ( 'Disciplina' ),
		$this->Form->input ( 'id', array (
				'type' => 'hidden',
				'value' => $disciplina['Disciplina']['id']
		) ), $this->Form->label ('Disciplina'),
		$this->Form->select ( 'nome', array (
				'Atividade Artística Complementar' => 'Atividade Artística Complementar',
				'Canto Coral' => 'Canto Coral',
				'Musicalização' => 'Musicalização',
				'Oficina Multimeios' => 'Oficina Multimeios',
				'Percepção Musical' => 'Percepção Musical',
				'Prática de Conjunto' => 'Prática de Conjunto',
				'Bateria' => 'Bateria',
				'Cavaquinho' => 'Cavaquinho',
				'Contrabaixo elétrico' => 'Contrabaixo elétrico',
				'Flauta doce' => 'Flauta doce',
				'Flauta transversal' => 'Flauta transversal',
				'Guitarra' => 'Guitarra',
				'Percussão' => 'Percussão',
				'Piano' => 'Piano',
				'Saxofone' => 'Saxofone',
				'Teclado' => 'Teclado',
				'Trombone' => 'Trombone',
				'Trompa' => 'Trompa',
				'Trompete' => 'Trompete',
				'Violão' => 'Violão',
				'Violino' => 'Violino',
				'Violoncelo' => 'Violoncelo',
		) ), '<br /><br />',
		$this->Form->label ('Curso'),
		$this->Form->select ( 'curso', array (
				'E' => 'Educação Musical',
				'T' => 'Técnico'
		) ), '<br /><br />',
		$this->Form->label ('Ciclo - Ano'),
		$this->Form->select ( 'ciclo', array (
				'I' => 'Inicial',
				'M' => 'Intermediario',
				'C' => 'Complementar',
				'1' => 'Primeiro',
				'2' => 'Segundo',
				'3' => 'Terceiro',
		) ), '<br /><br />',
		$this->Form->label ('Fase'),
		$this->Form->select ( 'fase', array (
				'1' => 'I',
				'2' => 'II',
				'3' => 'III'
		) ), '<br /><br />', $this->Form->end ( 'Atualizar' ),
		$this->Html->link ( 'voltar', array (
				'controller' => 'Coordenacaos',
				'action' => 'Disciplina' 
		), array (
				'class' => 'btn btn-back' 
		) );
?>
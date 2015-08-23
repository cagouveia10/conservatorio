<?php
	echo
		'<h3>Nova Disciplina</h3>',
		$this->Form->create ( 'Disciplina' ),
		$this->Form->label ('Disciplina'),
		'<select class="select" name="data[Disciplina][nome]" id="DisciplinaNome">
			<option value=""> </option>
			<option value="Atividade Artística Complementar">Atividade Artística Complementar</option>
			<option value="Canto Coral">Canto Coral</option>
			<option value="Musicalização">Musicalização</option>
			<option value="Oficina Multimeios">Oficina Multimeios</option>
			<option value="Percepção Musical">Percepção Musical</option>
			<option value="Prática de Conjunto">Prática de Conjunto</option>
			<optgroup label="Instrumento">
				<option style="margin-left:20px;" value="Bateria">Bateria</option>
				<option style="margin-left:20px;"value="Cavaquinho">Cavaquinho</option>
				<option style="margin-left:20px;"value="Contrabaixo elétrico">Contrabaixo elétrico</option>
				<option style="margin-left:20px;"value="Flauta doce">Flauta doce</option>
				<option style="margin-left:20px;"value="Flauta transversal">Flauta transversal</option>
				<option style="margin-left:20px;"value="Guitarra">Guitarra</option>
				<option style="margin-left:20px;"value="Percussão">Percussão</option>
				<option style="margin-left:20px;"value="Piano">Piano</option>
				<option style="margin-left:20px;"value="Saxofone">Saxofone</option>
				<option style="margin-left:20px;"value="Teclado">Teclado</option>
				<option style="margin-left:20px;"value="Trombone">Trombone</option>
				<option style="margin-left:20px;"value="Trompa">Trompa</option>
				<option style="margin-left:20px;"value="Trompete">Trompete</option>
				<option style="margin-left:20px;"value="Violão">Violão</option>
				<option style="margin-left:20px;"value="Violino">Violino</option>
				<option style="margin-left:20px;"value="Violoncelo">Violoncelo</option>
			</optgroup>
		</select><br /><br />',
		$this->Form->label ('Curso'),
		$this->Form->select ( 'curso', array (
				'Educação Musical' => 'Educação Musical',
				'Técnico' => 'Técnico'
		) ), '<br /><br />',
		$this->Form->label ('Ciclo - Ano'),
		$this->Form->select ( 'ciclo', array (
				'Inicial' => 'Inicial',
				'Intermediario' => 'Intermediario',
				'Complementar' => 'Complementar',
				'Primeiro' => 'Primeiro',
				'Segundo' => 'Segundo',
				'Terceiro' => 'Terceiro',
		) ), '<br /><br />',
		$this->Form->label ('Fase'),
		$this->Form->select ( 'fase', array (
				'I' => 'I',
				'II' => 'II',
				'III' => 'III'
		) ), '<br /><br />', $this->Form->end ( 'Cadastrar' ),
		$this->Html->link ( 'voltar', array (
				'controller' => 'Coordenacaos',
				'action' => 'Disciplina' 
		), array (
				'class' => 'btn btn-back' 
		) );
?>
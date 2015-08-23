<?php
	echo 
		$this->Form->create ( 'Aluno' ),
		'<h3>Dados Pessoais</h3>',
		$this->Form->input ( 'nome', array (
				'label' => false,
				'required' => true,
				'type' => 'text',
				'placeholder' => 'Nome Completo'
		) ), $this->Form->input ( 'rg', array (
				'label' => false,
				'required' => true,
				'type' => 'text',
				'placeholder' => 'Identidade'
		) ), $this->Form->input ( 'cpf', array (
				'label' => false,
				'required' => true,
				'type' => 'number',
				'placeholder' => 'CPF'
		) ), $this->Form->label ('Data de Nascimento'),  
		$this->Form->input ( 'datanasc', array(
				'label' => false, 
				'required' => true,
				'type' => 'date',
				'dateFormat' => 'DMY',
			    'minYear' => date('Y') - 50,
			    'maxYear' => date('Y') - 10,
				'style' => 'margin-left: -0.5px;'
		) ), $this->Form->label ('Sexo'), 
		$this->Form->select ( 'sexo', array (
				'M' => 'Masculino', 
				'F' => 'Feminino'
		) ), $this->Form->input ( 'naturalidade', array (
				'label' => false,
				'required' => true,
				'type' => 'text',
				'placeholder' => 'Naturalidade'
		) ), $this->Form->input ( 'ufnaturalidade', array (
				'label' => false,
				'required' => true,
				'type' => 'text',
				'placeholder' => 'UF - Naturalidade'
		) ), $this->Form->input ( 'mae', array (
				'label' => false,
				'required' => true,
				'type' => 'text',
				'placeholder' => 'Nome da Mãe'
		) ), $this->Form->input ( 'pai', array (
				'label' => false,
				'required' => true,
				'type' => 'text',
				'placeholder' => 'Nome do Pai'
		) ), 
		$this->Form->label ('Turno'),
		$this->Form->select ( 'turno', array (
				'Matutino' => 'Matutino',
				'Vespertino' => 'Vespertino',
				'Noturno' => 'Noturno'
		) ), $this->Form->input ( 'escola', array (
				'label' => false,
				'required' => true,
				'type' => 'text',
				'placeholder' => 'Escola'
		) ), $this->Form->input ( 'anoescolar', array (
				'label' => false,
				'required' => true,
				'type' => 'text',
				'placeholder' => 'Ano Escolar'
		) ), $this->Form->input ( 'obs', array (
				'label' => false,
				'type' => 'textarea',
				'placeholder' => 'Observação'
		) ), '<br /<br /><h3>Endereço</h3>',
		$this->Form->input ( 'rua', array (
				'label' => false,
				'required' => true,
				'type' => 'text',
				'placeholder' => 'Rua'
		) ), $this->Form->input ( 'numero', array (
				'label' => false,
				'required' => true,
				'type' => 'number',
				'placeholder' => 'Numero'
		) ), $this->Form->input ( 'bairro', array (
				'label' => false,
				'required' => true,
				'type' => 'text',
				'placeholder' => 'Bairro'
		) ), $this->Form->input ( 'cidade', array (
				'label' => false,
				'required' => true,
				'type' => 'text',
				'placeholder' => 'Cidade'
		) ), $this->Form->input ( 'uf', array (
				'label' => false,
				'required' => true,
				'type' => 'text',
				'placeholder' => 'UF'
		) ), '<br /><br /><h3>Contato</h3>',
		$this->Form->input ( 'telefone', array (
				'label' => false,
				'type' => 'number', 
				'placeholder' => 'Telefone'
		) ), $this->Form->input ( 'celular', array (
				'label' => false,
				'type' => 'number',
				'placeholder' => 'Celular'
		) ), $this->Form->input ( 'email', array (
				'label' => false,
				'type' => 'email',
				'placeholder' => 'Email'
		) ), $this->Form->end ( 'Cadastrar' ),
		$this->Html->link ( 'Voltar', array (
				'controller' => 'Coordenacaos',
				'action' => 'Aluno' 
		), array (
				'class' => 'btn btn-back' 
		) );
?>
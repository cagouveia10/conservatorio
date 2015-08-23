<?php
	echo 
		$this->Form->create ( 'Aluno' ),
		'<h3>Dados Pessoais</h3>',
		$this->Form->input ( 'id', array (
				'type' => 'hidden',
				'value' => $aluno['Aluno']['id']
		) ), $this->Form->input ( 'nome', array (
				'label' => 'Nome',
				'type' => 'text',
				'value' => $aluno['Aluno']['nome']
		) ), $this->Form->input ( 'rg', array (
				'label' => 'RG',
				'type' => 'text',
				'value' => $aluno['Aluno']['rg']
		) ), $this->Form->input ( 'cpf', array (
				'label' => 'CPF',
				'type' => 'number',
				'value' => $aluno['Aluno']['cpf']
		) ), $this->Form->input ( 'datanasc', array(
			    'label' => 'Data de Nascimento',
			    'type' => 'date',
				'dateFormat' => 'DMY',
			    'minYear' => date('Y') - 50,
			    'maxYear' => date('Y') - 10,
		) ), $this->Form->label ('Sexo'), 
		$this->Form->select ( 'sexo', array (
				'M' => 'Masculino', 
				'F' => 'Feminino'
		) ), $this->Form->input ( 'naturalidade', array (
				'label' => 'Naturalidade',
				'type' => 'text',
				'value' => $aluno['Aluno']['naturalidade']
		) ), $this->Form->input ( 'ufnaturalidade', array (
				'label' => 'UF - Naturalidade',
				'type' => 'text',
				'value' => $aluno['Aluno']['ufnaturalidade']
		) ), $this->Form->input ( 'mae', array (
				'label' => 'Mãe',
				'type' => 'text'
				
		) ), $this->Form->input ( 'pai', array (
				'label' => 'Pai',
				'type' => 'text',
				'value' => $aluno['Aluno']['pai']
		) ), 
		$this->Form->label ('Turno'),
		$this->Form->select ( 'turno', array (
				'M' => 'Matutino',
				'V' => 'Vespertino',
				'I' => 'Integral',
				'N' => 'Noturno'
		) ), $this->Form->input ( 'escola', array (
				'label' => 'Escola',
				'type' => 'text',
				'value' => $aluno['Aluno']['escola']
		) ), $this->Form->input ( 'anoescolar', array (
				'label' => 'Ano Escolar',
				'type' => 'text',
				'value' => $aluno['Aluno']['anoescolar']
		) ), $this->Form->input ( 'obs', array (
				'label' => 'Observação',
				'type' => 'textarea',
				'value' => $aluno['Aluno']['obs']
				
		) ), '<h3>Endereço</h3>',
		$this->Form->input ( 'rua', array (
				'label' => 'Rua',
				'type' => 'text',
				'value' => $aluno['Aluno']['rua']
		) ), $this->Form->input ( 'numero', array (
				'label' => 'Numero',
				'type' => 'number',
				'value' => $aluno['Aluno']['numero']
		) ), $this->Form->input ( 'bairro', array (
				'label' => 'Bairro',
				'type' => 'text',
				'value' => $aluno['Aluno']['bairro']
		) ), $this->Form->input ( 'cidade', array (
				'label' => 'Cidade',
				'type' => 'text',
				'value' => $aluno['Aluno']['cidade']
		) ), $this->Form->input ( 'uf', array (
				'label' => 'UF',
				'type' => 'text',
				'value' => $aluno['Aluno']['uf']
		) ), '<h3>Contato</h3>',
		$this->Form->input ( 'telefone', array (
				'label' => 'Telefone',
				'type' => 'number',
				'value' => $aluno['Aluno']['telefone']
		) ), $this->Form->input ( 'celular', array (
				'label' => 'Celular',
				'type' => 'number',
				'value' => $aluno['Aluno']['celular']
		) ), $this->Form->input ( 'email', array (
				'label' => 'Email',
				'type' => 'email',
				'value' => $aluno['Aluno']['email']
		) ), $this->Form->end ( 'Atualizar' ),
		$this->Html->link ( 'voltar', array (
				'controller' => 'Coordenacaos',
				'action' => 'Aluno' 
		), array (
				'class' => 'btn btn-back' 
		) );
?>
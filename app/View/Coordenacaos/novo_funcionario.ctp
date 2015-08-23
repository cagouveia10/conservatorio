<?php
	echo 
		$this->Html->script('senha'),
		$this->Form->create ( 'Funcionario' ),
		'<h3>Dados Pessoais</h3>',
		$this->Form->input ( 'nome', array (
				'label' => false,
				'required' => true,
				'type' => 'text',
				'placeholder' => 'Nome'
		) ), $this->Form->label ('Cargo'), 
		$this->Form->select ( 'cargo', array (
				'Coordenacaos' =>'Coordenador(a)',
				'Professors' =>'Professor(a)',
				'aux' =>'Auxiliar de Serviços Gerais'
		) ), $this->Form->input ( 'masp', array (
				'label' => false,
				'required' => true,
				'type' => 'number',
				'placeholder' => 'MASP'
		) ), $this->Form->input ( 'datanasc', array(
			    'label' => 'Data de Nascimento',
			    'type' => 'date',
				'dateFormat' => 'DMY',
			    'minYear' => date('Y') - 50,
			    'maxYear' => date('Y') - 10,
				'style' => 'margin-left: -0.5px;'
		) ), $this->Form->label ('Sexo'), 
		$this->Form->select ( 'sexo', array (
				'M' => 'Masculino', 
				'F' => 'Feminino'
		) ), '<br /><br /><h3>Endereço</h3>',
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
		) ), '<br /><br /><h3>Acesso</h3>',
		$this->Form->input ( 'senha', array (
				'label' => false,
				'required' => true,
				'type' => 'password',
				'placeholder' => 'Senha de Acesso'
		) ), $this->Form->input ( 'repsenha', array (
				'label' => false,
				'required' => true,
				'type' => 'password',
				'placeholder' => 'Repita Senha de Acesso'
		) ), $this->Form->end ( 'Cadastrar' ),
	
		$this->Html->link ( 'voltar', array (
				'controller' => 'Coordenacaos',
				'action' => 'Funcionario' 
		), array (
				'class' => 'btn btn-back' 
		) );
?>
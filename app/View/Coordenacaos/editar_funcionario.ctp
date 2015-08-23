<?php
	echo 
		$this->Html->script('senha'),
		$this->Form->create ( 'Funcionario' ),
		'<h3>Dados Pessoais</h3>',
		$this->Form->input ( 'id', array (
				'type' => 'hidden',
				'value' => $funcionario['Funcionario']['id']
		) ),
		$this->Form->input ( 'nome', array (
				'label' => 'Nome',
				'type' => 'text',
				'value' => $funcionario['Funcionario']['nome']
		) ), $this->Form->label ('Cargo'), 
		$this->Form->select ( 'cargo', array (
				'Coordenacaos' =>'Coordenador(a)',
				'Professors' =>'Professor(a)',
				'aux' =>'Auxiliar de Serviços Gerais'
		) ), $this->Form->input ( 'masp', array (
				'label' => 'MASP',
				'type' => 'number',
				'value' => $funcionario['Funcionario']['masp']
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
		) ), '<h3>Endereço</h3>',
		$this->Form->input ( 'rua', array (
				'label' => 'Rua',
				'type' => 'text',
				'value' => $funcionario['Funcionario']['rua']
		) ), $this->Form->input ( 'numero', array (
				'label' => 'Numero',
				'type' => 'number',
				'value' => $funcionario['Funcionario']['numero']
		) ), $this->Form->input ( 'bairro', array (
				'label' => 'Bairro',
				'type' => 'text',
				'value' => $funcionario['Funcionario']['bairro']
		) ), $this->Form->input ( 'cidade', array (
				'label' => 'Cidade',
				'type' => 'text',
				'value' => $funcionario['Funcionario']['cidade']
		) ), $this->Form->input ( 'uf', array (
				'label' => 'UF',
				'type' => 'text',
				'value' => $funcionario['Funcionario']['uf']
		) ), '<h3>Contato</h3>',
		$this->Form->input ( 'telefone', array (
				'label' => 'Telefone',
				'type' => 'number',
				'value' => $funcionario['Funcionario']['telefone']
		) ), $this->Form->input ( 'celular', array (
				'label' => 'Celular',
				'type' => 'number',
				'value' => $funcionario['Funcionario']['celular']
		) ), $this->Form->input ( 'email', array (
				'label' => 'Email',
				'type' => 'email',
				'value' => $funcionario['Funcionario']['email']
		) ), '<h3>Acesso</h3>',
		$this->Form->input ( 'senha', array (
				'label' => 'Senha de Acesso',
				'type' => 'password' 
		) ), $this->Form->input ( 'repsenha', array (
				'label' => 'Repita a Senha de Acesso',
				'type' => 'password'
		) ), $this->Form->end ( 'Atualizar' ),
	
		$this->Html->link ( 'voltar', array (
				'controller' => 'Coordenacaos',
				'action' => 'Funcionario' 
		), array (
				'class' => 'btn btn-back' 
		) );
?>
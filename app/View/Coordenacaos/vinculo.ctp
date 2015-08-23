<?php
	echo 
		$this->Html->link ( 'Novo Vinculo', array (
			'controller' => 'Coordenacaos',
			'action' => 'NovoVinculo' 
		), array (
				'class' => 'btn btn-primary' 
		) ),
	'<br /><br /><table>',
	$this->Html->tableHeaders(array('Professor', 'Disciplina', 'Opções'));
	foreach ( $vinculo as $vinculo ) :	
		echo 
			$this->Html->tableCells ( array (
				array (
						$vinculo ['Vinculo'] ['nomeprof'],
						$vinculo ['Vinculo'] ['nomedisc'],
						$this->Html->link ( 'Excluir Vinculo', array (
								'controller' => 'Coordenacaos',
								'action' => 'ExcluirVinculo',
								$vinculo ['Vinculo'] ['id'] 
						) ) 
				) 
		) );
	endforeach;
	echo
		'</table>',
		$this->Html->link ( 'voltar', array (
				'controller' => 'Coordenacaos',
				'action' => 'Index' 
		), array (
				'class' => 'btn btn-back' 
		) );
?>
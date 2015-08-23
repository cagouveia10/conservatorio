<?php
class ProfessorsController extends AppController {
	public $name = 'Professors';
	public $uses = array ('Turma', 'Avaliacao', 'Aluno');
	public function Index() {
		$this->VerificaLogin();
	}
	
	public function Horario() {
		$this->VerificaLogin();
		
		$sessao = $this->Session->read();		
		$turma = $this->Turma->find('all', array ('conditions' => array ('Turma.masp' => $sessao['session_usuario'])));
		$this->set(compact('turma'));
	}
	
	public function NotaFrequencia($id) {
		$this->VerificaLogin();
		
		$sessao = $this->Session->read();
		
		$avaliacao = $this->Avaliacao->findAllByIdturm($id);
		$this->set(compact('avaliacao'));
		
		$idaluno = $this->RetornaIndice($avaliacao, 'Avaliacao', 'idaluno');
		$aluno = $this->Aluno->find('all');
		
		$this->set(compact('avaliacao'));
		$this->set(compact('aluno'));
		$this->set(compact('idaluno'));
		
		
		if ($this->request->is('post')) {
			$this->request->data['Avaliacao']['idturma'] = $id;
			
			if ($this->Avaliacao->save($this->request->data)) {
				$this->Session->setFlash('Lançamento bem sucedido!', 'default', array('class' => 'success'));
				$this->redirect ( array ('controller' => 'Professors', 'action' => 'NotaFrequencia', $id));
			}
			else {
				$this->Session->setFlash('Não foi possivel realizar o lançamento!');
			}
		}
	}
	
	public function SelecionarTurma() {
		$this->VerificaLogin();
	
		$sessao = $this->Session->read();
		$turma = $this->Turma->findAllByMasp($sessao['session_usuario']);
		$this->set(compact('turma'));
		
		if ($this->request->is('post')) {
			$id = $this->request->data['Turma']['id'];
			$this->redirect ( array (
							'controller' => 'Professors',
							'action' => 'NotaFrequencia',
							$id
					) );
		}
		
	}

}
?>
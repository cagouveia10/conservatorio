<?php
class AlunosController extends AppController {
	public $name = 'Alunos';
	public $uses = array ('Aluno', 'Turma', 'Avaliacao', 'Matricula');
	
	public function Index(){
	}
	
	public function Horario(){
		$this->VerificaLogin();
		
		$sessao = $this->Session->read(); //PEGA A MATRICULA
		$aluno = $this->Aluno->findByMatricula($sessao['session_usuario']); // PEGA O ALUNO REFERENTE A MATRICULA
		$id = $this->Matricula->findAllByIdaluno($aluno['Aluno']['id']); //PEGA AS TUPLAS COM ID DO ALUNO
		$idturm = $this->RetornaIndice($id, 'Matricula', 'idturm');
		
		$turma = $this->Turma->find('all');
		
		$this->set(compact('turma'));
		$this->set(compact('idturm'));
	}
	public function Turma(){
		$this->VerificaLogin();
		
		$sessao = $this->Session->read(); //PEGA A MATRICULA
		$aluno = $this->Aluno->findByMatricula($sessao['session_usuario']); // PEGA O ALUNO REFERENTE A MATRICULA
		$avaliacao = $this->Avaliacao->findAllByIdaluno($aluno['Aluno']['id']); //PEGA AS TUPLAS COM ID DO ALUNO
		
		$idturm = $this->RetornaIndice($avaliacao, 'Avaliacao', 'idturm');
		$turma = $this->Turma->find('all');
		
		$this->set(compact('avaliacao'));
		$this->set(compact('turma'));
		$this->set(compact('idturm'));
	}
}
?>
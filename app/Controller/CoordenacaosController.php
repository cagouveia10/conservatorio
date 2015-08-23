<?php
class CoordenacaosController extends AppController {
	public $name = 'Coordenacaos';
	public $uses = array ('Aluno', 'Vinculo', 'Funcionario', 'Disciplina', 'Turma', 'Avaliacao', 'Matricula', 'Autenticacao');
	public function Index() {
		$this->VerificaLogin();
	}
	
	public function Aluno(){
		$this->VerificaLogin();
		$aluno = $this->Aluno->find('all', array('order' => array('Aluno.nome' => 'asc')));
		$this->set(compact('aluno'));
	}
	public function NovoAluno(){
		$this->VerificaLogin();
		
		if ($this->request->is('post')) {		
			$this->request->data['Aluno']['matricula'] = substr($this->request->data['Aluno']['nome'], 0, 4).date('i').date('s');
			if ($this->Aluno->save($this->request->data)) {
				
				$this->Autenticacao->savefield('usuario', $this->request->data['Aluno']['matricula']);
				$this->Autenticacao->savefield('senha', $this->request->data['Aluno']['matricula']);
				$this->Autenticacao->savefield('contracess', 'Alunos');
				
				$this->Session->setFlash('Aluno cadastrado com sucesso!', 'default', array('class' => 'success'));
				$this->redirect(array('controller' => 'Coordenacaos', 'action' => 'Aluno')); // REDIRECIONANDO
			}
			else {
				$this->Session->setFlash('Não foi possivel cadastrar o aluno!');
			}
		}
	}
	public function EditarAluno($id){
		$this->VerificaLogin();
		
		$this->set('aluno', $this->Aluno->findById($id));
		
		if($this->request->data){
			if($this->Aluno->save($this->request->data)) {
				$this->Session->setFlash('Aluno alterado com sucesso!', 'default', array('class' => 'success'));
				$this->redirect(array('controller' => 'Coordenacaos', 'action' => 'Aluno')); // REDIRECIONANDO
			}
			else{
				$this->Session->setFlash('Não foi possivel alterar o aluno!');
				}
		}
	}
	public function ExcluirAluno($id){
		$this->VerificaLogin();
		
		if($this->Aluno->delete($id)) {
			$this->Session->setFlash('Aluno deletado com sucesso!', 'default', array('class' => 'success'));
			$this->redirect(array('controller' => 'Coordenacaos', 'action' => 'Aluno'));
		}
		else{
			$this->Session->setFlash('Não foi possivel deletar o aluno!');
		}
	}
	
	public function Funcionario(){
		$this->VerificaLogin();
		$funcionario = $this->Funcionario->find('all', array('order' => array('Funcionario.nome' => 'asc')));
		$this->set(compact('funcionario'));
	}
	public function NovoFuncionario(){
		$this->VerificaLogin();
		if ($this->request->is('post')) {
			
			$id = $this->request->data['Funcionario']['masp'];
			$verifica = $this->Funcionario->find ( 'all', array (
					'conditions' => array (
							'Funcionario.masp' => $id,
					)
			) );
			
			$senha = $this->request->data['Funcionario']['senha'];
			$repsenha = $this->request->data['Funcionario']['repsenha'];
			
			if ($senha == $repsenha) {
				if ($verifica){
					$this->Session->setFlash('Funcionario(a) já cadastrado!');
				}
				else {
					if ($this->Funcionario->save($this->request->data)) {
						
						$this->Autenticacao->savefield('usuario', $this->request->data['Funcionario']['masp']);
						$this->Autenticacao->savefield('senha', $this->request->data['Funcionario']['senha']);
						$this->Autenticacao->savefield('contracess', $this->request->data['Funcionario']['cargo']);
						
						$this->Session->setFlash('Funcionario cadastrado com sucesso!', 'default', array('class' => 'success'));
						$this->redirect(array('controller' => 'Coordenacaos', 'action' => 'Funcionario'));
					}
					else {
						$this->Session->setFlash('Não foi possivel cadastrar o funcionario!');
					}
				}
			}
			else {
				$this->Session->setFlash('As senhas não coincidem!');
			}
		}
	}
	public function EditarFuncionario($id){
		$this->VerificaLogin();
		
		$this->set('funcionario', $this->Funcionario->findById($id));
		if($this->request->data){
			if($this->Funcionario->save($this->request->data)) {
				$this->Session->setFlash('Funcionario alterado com sucesso!', 'default', array('class' => 'success'));
				$this->redirect(array('controller' => 'Coordenacaos', 'action' => 'Funcionario')); // REDIRECIONANDO
			}
			else{
				$this->Session->setFlash('Não foi possivel alterar o funcionario!');
			}
		}
	}
	public function ExcluirFuncionario($id){
		$this->VerificaLogin();
		
		$funcionario = $this->Funcionario->findById($id);
		$autenticacao_funcionario = $this->Autenticacao->findByUsuario($funcionario['Funcionario']['masp']);
		
		if($this->Funcionario->delete($id)) {
			$this->Autenticacao->delete($autenticacao_funcionario['Autenticacao']['id']);
			$this->Session->setFlash('Funcionario deletado com sucesso!', 'default', array('class' => 'success'));
			$this->redirect(array('controller' => 'Coordenacaos', 'action' => 'Funcionario'));
		}
		else{
			$this->Session->setFlash('Não foi possivel deletar o funcionario!');
			$this->redirect(array('controller' => 'Coordenacaos', 'action' => 'Funcionario'));
		}
	}
	
	public function Disciplina(){
		$this->VerificaLogin();
		$disciplina = $this->Disciplina->find('all');
		$this->set(compact('disciplina'));
	}
	public function NovaDisciplina(){
		$this->VerificaLogin();
		if ($this->request->is('post')) {
			if ($this->Disciplina->save($this->request->data)) {
				$this->Session->setFlash('Disciplina cadastrada com sucesso!', 'default', array('class' => 'success'));
				$this->redirect(array('controller' => 'Coordenacaos', 'action' => 'Disciplina'));
			}
			else {
				$this->Session->setFlash('Não foi possivel cadastrar a disciplina!');
			}
		}
	}
	public function EditarDisciplina($id){
		$this->VerificaLogin();
	
		$this->set('disciplina', $this->Disciplina->findById($id));
		if($this->request->data){
			if($this->Disciplina->save($this->request->data)) {
				$this->Session->setFlash('Disciplina alterada com sucesso!', 'default', array('class' => 'success'));
				$this->redirect(array('controller' => 'Coordenacaos', 'action' => 'Disciplina')); // REDIRECIONANDO
			}
			else{
				$this->Session->setFlash('Não foi possivel alterar a disciplina!');
			}
		}
	}
	public function ExcluirDisciplina($id){
		$this->VerificaLogin();
	
		if($this->Disciplina->delete($id)) {
			$this->Session->setFlash('Disciplina deletada com sucesso!', 'default', array('class' => 'success'));
			$this->redirect(array('controller' => 'Coordenacaos', 'action' => 'Disciplina'));
		}
		else{
			$this->Session->setFlash('Não foi possivel deletar a Disciplina!');
		}
	}
	
	public function Vinculo(){
		$this->VerificaLogin();
		$vinculo = $this->Vinculo->find('all', array('order' => array('Vinculo.nomeprof' => 'asc')));
		$this->set(compact('vinculo'));
	}
	public function NovoVinculo(){
		$this->VerificaLogin();
	
		$prof = $this->Funcionario->find('all');
		$this->set(compact('prof'));
	
		$disciplina = $this->Disciplina->find('all');
		$this->set(compact('disciplina'));
	
		if ($this->request->is('post')) {
			if ($this->Vinculo->save($this->request->data)) {
				$this->Session->setFlash('Professor cadastrado com sucesso!', 'default', array('class' => 'success'));
				$this->redirect(array('controller' => 'Coordenacaos', 'action' => 'Vinculo'));
			}
			else {
				$this->Session->setFlash('Não foi possivel cadastrar o professor!');
			}
		}
	}
	public function ExcluirVinculo($id){
		$this->VerificaLogin();
	
		if($this->Vinculo->delete($id)) {
			$this->Session->setFlash('Professor desvinculado com sucesso!', 'default', array('class' => 'success'));
			$this->redirect(array('controller' => 'Coordenacaos', 'action' => 'Vinculo'));
		}
		else{
			$this->Session->setFlash('Não foi possivel desvincular o professor!');
		}
	}
	
	public function Turma(){
		$this->VerificaLogin();
		$turma = $this->Turma->find('all');
		$this->set(compact('turma'));
	}
	public function NovaTurma(){
		$this->VerificaLogin();
		
		$professor = $this->Funcionario->find('all');
		$this->set(compact('professor'));
		
		$disciplina = $this->Disciplina->find('all');
		$this->set(compact('disciplina'));
		
		if ( empty($professor) || empty($disciplina) ){
			echo $this->Session->setFlash('Não há professor/disciplina cadastrado(a) no sistema');
		}
		
		if ($this->request->is('post')) {
			
			if ($this->Turma->save($this->request->data)) {
				$this->Session->setFlash('Turma cadastrada com sucesso!', 'default', array('class' => 'success'));
				$this->redirect(array('controller' => 'Coordenacaos', 'action' => 'Turma'));
			}
			else {
				$this->Session->setFlash('Não foi possivel cadastrar a turma!');
			}
		}
	}
	public function ExcluirTurma($id){
		$this->VerificaLogin();
		
		if($this->Turma->delete($id)) {
			$this->Session->setFlash('Turma deletada com sucesso!', 'default', array('class' => 'success'));
			$this->redirect(array('controller' => 'Coordenacaos', 'action' => 'Turma'));
		}
		else{
			$this->Session->setFlash('Não foi possivel deletar a turma!');
		}
	}
	
	public function Matricula($idTURMA){
		$this->VerificaLogin();
		
		$nomealuno = $this->Aluno->find('all', array('order' => array('Aluno.nome' => 'asc')));
		
		$this->set(compact('nomealuno'));
		
		if ($this->request->is('post')) {
			
			$id = $this->request->data['Matricula']['idaluno'];
			$turma = $idTURMA;
			
			$this->request->data['Matricula']['idavalia'] = $this->CriaAvaliacao($id, $turma);
			
			$NomeAlunoToSave = $this->Aluno->findById($id);
			$this->request->data['Matricula']['nomealuno'] = $NomeAlunoToSave['Aluno']['nome'];
			
			$this->request->data['Matricula']['idturm'] = $turma;
			
			$verifica = $this->Matricula->find ( 'all', array (
					'conditions' => array (
							'Matricula.idaluno' => $id,
							'Matricula.idturm' => $turma 
					) 
			) );
			
			if ($verifica){
				$this->Session->setFlash('Aluno(a) ja matriculado!');
			}
			else {
				
				if ($this->Matricula->save($this->request->data)) {
					$this->Session->setFlash('Matricula realizada com sucesso!', 'default', array('class' => 'success'));
					$this->redirect(array('controller' => 'Coordenacaos', 'action' => 'VisualizarMatricula',$idTURMA));
				}
				else {
					$this->Session->setFlash('Não foi possivel realizar a matricula!');
				}	
			}
		}
	}
	public function VisualizarMatricula($id){					// RECEBE O $ID DA TURMA SELECIONADA
		$this->VerificaLogin();
																// PROCURA O $ID NA TAB MATRICULA
		$this->set(compact('id'));
		$tab_matricula = $this->Matricula->find ('all', array (
				'order' => array (
						'Matricula.nomealuno' => 'asc' 
				),
				'conditions' => array (
						'Matricula.idturm' => $id
				)
		) );
		$this->set(compact('tab_matricula')); 					// COMPARA COM O $ID DA TAB ALUNO
	}
	public function Desmatricular($id, $idturma ){
		$this->VerificaLogin();
		
		$id_delete = $this->Matricula->findByIdaluno ($id);
		$id_delete_avaliacao = $this->Avaliacao->findByIdaluno($id);
		
		if($this->Matricula->delete($id_delete['Matricula']['id'])) {
			$this->Avaliacao->delete($id_delete_avaliacao['Avaliacao']['id']);
			$this->Session->setFlash('Aluno desmatriculado com sucesso!', 'default', array('class' => 'success'));
			$this->redirect(array('controller' => 'Coordenacaos', 'action' => 'VisualizarMatricula',$idturma));
		}
		else{
			$this->Session->setFlash('Não foi possivel desmatricular o aluno!');
			$this->redirect(array('controller' => 'Coordenacaos', 'action' => 'VisualizarMatricula',$idturma));
		}
	}
}

?>
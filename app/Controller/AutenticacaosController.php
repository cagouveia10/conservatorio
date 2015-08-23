<?php
class AutenticacaosController extends AppController {
	public $name = 'Autenticacaos';
	public $uses = array (	'Autenticacao' );
	public function login() {
		if ($this->request->is ( 'post' )) {
			$usuario = $this->Autenticacao->findByUsuario($this->request->data['Login']['usuario']);
			if ($usuario) {
				if ($usuario ['Autenticacao'] ['senha'] == $this->request->data['Login']['senha']) {
					$this->Session->write ( 'session_id', $usuario ['Autenticacao'] ['id'] );
					$this->Session->write ( 'session_usuario', $usuario ['Autenticacao'] ['usuario'] );
					$this->redirect ( array (
							'controller' => $usuario ['Autenticacao'] ['contracess'],
							'action' => 'index' 
					) );
				} else {
					$this->Session->setFlash ( 'Usuário ou Senha incorreto(a) !' );
				}
			} else {
				$this->Session->setFlash ( 'Usuário ou Senha incorreto(a) !' );
			}
		}
	}
	public function logout() {
		if ($this->Session->valid ()) {
			$this->Session->destroy ();
			$this->redirect ( array (
					'controller' => 'Autenticacaos',
					'action' => 'login' 
			) );
		}
	}
}
?>
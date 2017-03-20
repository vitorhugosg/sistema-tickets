<?php
class loginController extends controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {

		$dados = array();

		//login

		if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha']) ) {

			$email = addslashes($_POST['email']);
			$senha = md5($_POST['senha']);

			$u = new usuarios();

			//verificar se login existe

			if ($u->fazerLogin($email, $senha)) {
				header("Location: " . BASE_URL);
			}else{
				$dados['aviso'] = "Usuarios e senha não se encontram em nosso banco de dados.";
			}
		}

		$this->loadView('login', $dados);
	}


	public function cadastro(){
		//informacoes a serem passadas pra view
		$dados = array('aviso' => '');
    	//se formulario foi enviado

		if (
			isset($_POST['nome']) ||
			isset($_POST['email']) ||
			isset($_POST['senha']) ||
			isset($_POST['senhaDois'])){

				$nome = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']);
				$senha = md5($_POST['senha']);
				$senhaDois = md5($_POST['senhaDois']);
				if ($senha == $senhaDois){

					if(!empty($nome) && !empty($email) && !empty($senha)){
						//instanciando model usuarios
						$u = new usuarios();
						//se email nao existir
						if (!$u->usuarioExiste($email)) {
							//inserindo usuário
							$_SESSION['twlg'] = $u->inserirUsuario($nome, $email, $senha);
							//mandando para página inicial
							header('Location: '. BASE_URL);

						}else{
							$dados['aviso'] = "Email cadastrado já existe.";
						}
					}else{
						$dados['aviso'] = "Preencha todos os campos.";
					}
				}else{
					$dados['aviso'] = "As senhas não estão iguais";
				}

			}
			$this->loadView('cadastro', $dados);
		}

		public function sair(){
			unset($_SESSION['twlg']);

			header('Location: '.BASE_URL.'/login');
		}

	}
<?php
class usuarios extends model{



	public function __construct(){
		parent::__construct();
	}
	public function isLogged(){
    	//verificar se existe uma SESSAO

		if (isset($_SESSION['twlg']) && !empty($_SESSION['twlg'])) {
			return true;
		}else{
			return false;
		}


	}

	//pegando nome do usuario

	public function getNome($id){

		if (!empty($id)) {
			$sql = "SELECT nome FROM usuarios WHERE id = '".$id."'";

			//echo "$sql";exit;
			//acionando a query
			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0) {
				$sql = $sql->fetch();

				//retornando o nome do usuario

				return $sql['nome'];
			}
		}
	}

	public function usuarioExiste($email){
		$sql = "SELECT * FROM usuarios WHERE email = '$email'";

		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			return true;
		}else{
			return false;
		}

	}

	//cadastrando usuarios
	public function inserirUsuario($nome, $email, $senha){

		$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha', admin = '0'";
		$sql = $this->db->query($sql);

		$id = $this->db->lastInsertId();
		//adicionar seguidor dele mesmo
		$relacionamento = new relacionamentos();
		$relacionamento->seguir($id, $id);

		//isso vai ser a sessão do usuario
		return $id;

	}

	//cadastrar admin
	public function inserirAdmin($nome, $email, $senha){

		$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha', admin = '1'";
		$sql = $this->db->query($sql);
		$id = $this->db->lastInsertId();

		//isso vai ser a sessão do usuario
		return $id;

	}

	public function fazerLogin($email, $senha){

		$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
		//echo $sql;exit;
		$sql = $this->db->query($sql);


		if ($sql->rowCount() > 0) {
			//pegando dado do usuário
			$sql = $sql->fetch();

			$_SESSION['twlg'] = $sql['id'];

			return true;
		}else{
			return false;
		}

	}

	public function getSeguidos(){
		//falando que vai ser um array
		$array = array();
		// query pra ver se ta seguindo ou não
		$sql = "SELECT id_seguido FROM relacionamentos WHERE id_seguido = '".$_SESSION['twlg']."'";
		//executa a query
		$sql = $this->db->query($sql);
		//vendo se tem alguma resposta
		if ($sql->rowCount() > 0) {
			//jogando informacoes em $seg
			$sql = $sql->fetchAll();
			foreach($sql as $seg){
				//dentro do array vai ficar so os ID seguido
				$array[] = $seg['id_seguido'];
			}
		}
		// retorna a quantidade de seguidores como array
		return $array;
	}

	public function getAdmin($id){

		if (!empty($id)) {
			$sql = "SELECT admin FROM usuarios WHERE id = '".$id."'";

			
			//acionando a query
			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0) {
				$sql = $sql->fetch();

				//retornando o nome do usuario

				return $sql['admin'];
			}
		}

		
	}


}
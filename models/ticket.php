<?php 
class ticket extends model{
	public function __construct(){
		parent::__construct();

	}
	//cadastrando Ticket
	public function inserirTicket($nomeProduto, $categoria, $texto, $idUsuario, $arquivo){
		$helpers = new helpers();
		$codigo = $helpers->gerarIdUnico();
		$u = new usuarios();
		$nomeUsuario = $u->getNome($_SESSION['twlg']);

		$sql = "INSERT INTO ticket SET codigo = '$codigo', categoria = '$categoria', produto = '$nomeProduto', data = NOW(), data_att = NOW(), atendido = '--', status = '0', texto_ticket = '$texto', usuario = '$idUsuario', arquivo = '$arquivo', nome_usuario = '$nomeUsuario'";
		$sql = $this->db->query($sql);

		return true;
	}

	//mostrando tickets do usuário
	public function mostrarTickets($lista){

		$helpers = new helpers();
		//array jogando retorno em um array
		$array = array();
		//verificando se tem alguem na lista
		if (count($lista) > 0) {
			//puxando os posts do banco de dados
			//ordem de data decrescente
			$sql = "SELECT *, (select nome from usuarios where usuarios.id = ticket.usuario) as usuario FROM ticket WHERE usuario IN (".implode(',', $lista).") ORDER BY data ASC";

			//executando a query
			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0) {


				//se teve joga informacoes dentro do array pra ser tratada no controller
				$array = $sql->fetchAll();
				//dump($array);
				foreach($array as $k => $v) {
					$array[$k]['status'] = $helpers->statusAtendimento($array[$k]['status']);
				}
				
				//tratando data
				foreach ($array as $i => $v) {
					$array[$i]['data'] = date('d/m/Y H:i:s', strtotime($array[$i]['data']));
				}

				//tratando data_att
				foreach ($array as $i => $v) {
					$array[$i]['data_att'] = date('d/m/Y H:i:s', strtotime($array[$i]['data_att']));
				}
			}
		}


		//returnando informacoes através de um array
		return $array;
	}

	//mostrando tickets do admin
	public function mostrarTicketsAdmin($lista){

		$helpers = new helpers();
		//array jogando retorno em um array
		$array = array();
		//verificando se tem alguem na lista
		if (count($lista) > 0) {
			//puxando os posts do banco de dados
			//ordem de data decrescente
			$sql = "SELECT * FROM ticket ORDER BY data ASC";

			//executando a query
			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0) {


				//se teve joga informacoes dentro do array pra ser tratada no controller
				$array = $sql->fetchAll();
				//dump($array);
				foreach($array as $k => $v) {
					$array[$k]['status'] = $helpers->statusAtendimento($array[$k]['status']);
				}

				//tratando data
				foreach ($array as $i => $v) {
					$array[$i]['data'] = date('d/m/Y H:i:s', strtotime($array[$i]['data']));
				}

				//tratando data_att
				foreach ($array as $i => $v) {
					$array[$i]['data_att'] = date('d/m/Y H:i:s', strtotime($array[$i]['data_att']));
				}
			}
		}


		//returnando informacoes através de um array
		return $array;
	}

	//pegando ticket certo historico

	public function getTicket($codigo){
		$array = array();

		if (!empty($codigo)) {
			$sql = "SELECT * FROM ticket WHERE codigo = '".$codigo."'";

			//echo "$sql";exit;
			//acionando a query
			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0) {
				$sql = $sql->fetch();

				//retornando o nome do usuario
				$array = $sql;
				return $array;
			}
		}
	}

	public function atualizaDataAtt($codigo){
		//se o codigo não estiver vasio
		if (!empty($codigo)) {
			//atualiza ticket para data atual onde o codigo for igual codigo passado
			$sql = "
			UPDATE ticket
			SET data_att = NOW()
			WHERE codigo = '$codigo'
			";
			//acionando a query
			$sql = $this->db->query($sql);
			return true;
		}

	}

	public function atualizaAtendimento($codigo){
		//se o codigo não estiver vasio
		$id = $_SESSION["twlg"];
		$u = new usuarios();
		$nome = $u->getNome($id);

		if ($u->getAdmin($id) == '1') {
				//atualiza ticket para data atual onde o codigo for igual codigo passado
			$sql = "
			UPDATE ticket
			SET atendido = '$nome'
			WHERE codigo = '$codigo'
			";
			//acionando a query
			$sql = $this->db->query($sql);
			return true;
		}

	}

	public function atualizaStatus($codigo){
		$id = $_SESSION["twlg"];
		$u = new usuarios();
		$nome = $u->getNome($id);

		if ($u->getAdmin($id) == '1') {
				//atualiza ticket para data atual onde o codigo for igual codigo passado
			$sql = "
			UPDATE ticket
			SET status = '1'
			WHERE codigo = '$codigo'
			";
			//acionando a query
			$sql = $this->db->query($sql);
			return true;
		}
	}
}



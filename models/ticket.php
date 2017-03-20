<?php 
class ticket extends model{
	public function __construct(){
		parent::__construct();

	}
	//cadastrando Ticket
	public function inserirTicket($nomeProduto, $categoria, $texto, $idUsuario, $arquivo){
		$codigo = uniqid();
		$sql = "INSERT INTO ticket SET codigo = '$codigo', categoria = '$categoria', produto = '$nomeProduto', data = NOW(), data_att = NOW(), atendido = '--', status = '0', texto_ticket = '$texto', usuario = '$idUsuario', arquivo = '$arquivo'";
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
			$sql = "SELECT *, (select nome from usuarios where usuarios.id = ticket.usuario) as usuario FROM ticket WHERE usuario IN (".implode(',', $lista).") ORDER BY data DESC";

			//executando a query
			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0) {


				//se teve joga informacoes dentro do array pra ser tratada no controller
				$array = $sql->fetchAll();
				//dump($array);
				foreach($array as $k => $v) {
					$array[$k]['status'] = $helpers->statusAtendimento($array[$k]['status']);
				}

				dump($array);
			}
		}


		//returnando informacoes através de um array
		return $array;
	}
}



<?php 

class relacionamentos extends model{

	public function seguir($seguidor, $seguido){
		//INSERINDO RELACIONAMENTO NA TABELA SEGUIR
		$sql = "INSERT INTO relacionamentos SET id_seguidor = '$seguidor', id_seguido = '$seguido'";

		//executa query
		$this->db->query($sql);

	}

	public function deseguir($seguidor, $seguido) {
		//INSERINDO RELACIONAMENTO NA TABELA SEGUIR
		$sql = "DELETE FROM relacionamentos WHERE id_seguidor = '$seguidor' AND id_seguido = '$seguido'";


		//executa query
		$this->db->query($sql);

	}

}

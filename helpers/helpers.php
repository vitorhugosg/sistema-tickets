<?php 

class helpers{
	//FUNCOES AUXILIARES
	public function statusAtendimento($status){
		if ($status == 0) {
			return 'Aguardando resposta.';
		}elseif ($status == 1) {
			return "Em atendimento.";
		}else{
			return "Concluído.";
		}
	}
}






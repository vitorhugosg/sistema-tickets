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

	public function gerarIdUnico(){
		return rand(time(), 99);
	}

	public function formatarData($data){

	}
}






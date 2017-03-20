<?php
class Core {

	public function run() {
		//vericando se a parametro sendo passado pela url
		$url = "/".((isset($_GET['q']))?$_GET['q']:'');


		$params = array();
		if(!empty($url) && $url != '/') {
			$url = explode('/', $url);
			array_shift($url);

			$currentController = $url[0].'Controller';
			array_shift($url);
			//verificando se a barra existe && não está em branco
			if(isset($url[0]) && !empty($url[0])) {
				$currentAction = $url[0];
				array_shift($url);
			} else {
				$currentAction = 'index';
			}

			if(count($url) > 0) {
				$params = $url;
			}

		} else {
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		$c = new $currentController();
		call_user_func_array(array($c, $currentAction), $params);

	}

}


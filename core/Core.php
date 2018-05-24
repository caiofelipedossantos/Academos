<?php
class Core {

	public function run() {
<<<<<<< HEAD
        $url = '/'.(isset($_GET['q'])?$_GET['q']:'');
        //$url = explode("index.php", $_SERVER['PHP_SELF']);
		//$url = end($url);
		
		$params = array();
		if(!empty($url) && $url != '/') {
		//if(!empty($url)) {
=======
        //$url = '/'.(isset($_GET['q'])?$_GET['q']:'');
        $url = explode("index.php", $_SERVER['PHP_SELF']);
		$url = end($url);
		
		$params = array();
		//if(!empty($url) && $url != '/') {
		if(!empty($url)) {
>>>>>>> 5e3838194be39c9774e27f18bfadd88aceb58724
			$url = explode('/', $url);
			array_shift($url);

			$currentController = $url[0].'Controller';
			array_shift($url);

<<<<<<< HEAD
			if(isset($url[0]) && $url[0] != '/') {
			//if(isset($url[0])) {
=======
			//if(isset($url[0]) && $url[0] != '/') {
			if(isset($url[0])) {
>>>>>>> 5e3838194be39c9774e27f18bfadd88aceb58724
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

		if(file_exists('controllers/'. $currentController . '.php')){
			$c = new $currentController();
		}else{
			$c = new paginaController();
			$currentAction = "index";
			$pNome  = explode("Controller", $currentController);
			$pNome = $pNome[0];
			$params = array($pNome);
		}

		/*
		if(!file_exists('controllers/'.$currentController.'.php')) {
			$currentController = 'notFoundController';
			$currentAction = 'index';
		}
		*/

		if(!method_exists($c, $currentAction)) {
			$currentAction = 'index';
		}

		call_user_func_array(array($c, $currentAction), $params);

	}

}
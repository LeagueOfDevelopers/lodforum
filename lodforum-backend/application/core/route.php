<?php
class Route{
	static function start(){
		echo "WRwwer";
		$controller_name = "Main";
		$action_name = 'index';
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		//ПОЛУЧАЕМ ИМЯ КОНТРОЛЛЕРА
		if(!empty($routes[3])){
			$controller_name = $routes[3];
		}
		//ПОЛУЧАЕМ ИМЯ ДЕЙСТВИЯ-ЭКШЕНА
		if(!empty($routes[4])){
			$action_name= $routes[4];
		}

		//ПРОЦЕСС ДОБАВЛЕНИЯ ПРЕФИКСОВ
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		//$action_name = 'action_'.$action_name;
		//ТЕПЕРЬ ПОДКЛЮЧАЕМ ФАЙЛЫ-КЛАССЫ: МОДЕЛЬ-КОНТРОЛЛЕР
		//СНАЧАЛА МОДЕЛЬ
		$model_file = strtolower($model_name).'.php';
		
		$model_path = "application/models/".$model_file;
		if(file_exists($model_path)){
			include "application/models/".$model_file;
		}
		//ПОТОМ КОНТРОЛЛЕР
		$controller_file = strtolower($controller_name).'.php';
		
		$controller_path = "application/controllers/".$controller_file;
		if(file_exists($controller_path)){
			include "application/controllers/".$controller_file;
		}
		//ЕСЛИ ЗАПРОС ЮЗЕРА ОКАЗАЛСЯ НЕВЕРНЫМ - ВЫЗЫВАЕМ МЕТОД КЛАССА ROUTE
		else{
			Route::ErrorPage404();
		}
		$controller = new $controller_name;
		$action = $action_name;
		$controller->action_index($action);
		//ЕСЛИ ЮЗЕР ОШИБСЯ, НО УЖЕ ВО ВТОРОЙ ЧАСТИ УРЛА
		// if(method_exists($controller, $action)){
		// 	$controller->$action();
		// }
		// else{
		// 	Route::ErrorPage404();
		// }
	}
	
	static function ErrorPage404(){
		$host = "http://".$_SERVER["HTTP_HOST"]."/forum/";
		header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header("Location:".$host.'404');
	}
}
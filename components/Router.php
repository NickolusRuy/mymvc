<?php

class Router
{

	private $routes;

	public function __construct()
	{
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
	}

// Return type

	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
			return trim($_SERVER['REQUEST_URI'], '/');
		}
	}

	public function run()
	{
		$uri = $this->getURI();

		//echo $uri;

		foreach ($this->routes as $uriPattern => $path) {

//echo "<br>". $uriPattern." -> ".$path."<br>";
/*
echo "<br>";

echo $uriPattern."<br>";
echo  "Uri ".$uri."<br>";
echo "<br>";
*/
			if(preg_match("~$uriPattern~", $uri)) {

/*
echo "URI pattern -".$uriPattern ."<br>";
echo "URI -".$uri ."<br>";
echo "Path ".$path ."<br>";

*/

				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);

				$segments = explode('/', $internalRoute);

					//	print_r($internalRoute);

				//echo '<pre>';
				//echo print_r($segments);
				//echo '</pre>';

				$controllerName = array_shift($segments).'Controller';
				$controllerName = ucfirst($controllerName);


				//action


				$actionName = 'action'.ucfirst((array_shift($segments)));

				$parameters = $segments;


				$controllerFile = ROOT . '/controllers/' .$controllerName. '.php';
				if (file_exists($controllerFile)) {
					include_once($controllerFile);
				}

				$controllerObject = new $controllerName;




				$callingAction = explode('?',$actionName)[0];

				$result = call_user_func_array(array($controllerObject,$callingAction), $parameters);

				if ($result != null) {
					break;
				}

				break;
			}

		}
	}
}

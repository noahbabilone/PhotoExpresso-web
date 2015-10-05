<?php

	namespace AppController;
	/**
	* @Class
	*/
	class Autoloader {


		static function  chargementClass()
		{
            
			spl_autoload_register(array(__CLASS__,'autoload')); // ___Class__ permet d'appeler la classe, elle même ici ==> Autoloader
		}

		public static function autoload($class)
		{
			if (strpos($class, __NAMESPACE__.'\\') === 0)
			{
				$class = str_replace(__NAMESPACE__.'\\','', $class);
				$class = str_replace('\\', '/', $class);
/* 				echo ROOT."/Controllers/".$class.".php ****<br>";*/
				require ROOT."/Controllers/".$class.".php";
			}

		}

	}

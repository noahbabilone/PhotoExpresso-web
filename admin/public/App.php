<?php
use AppModel\Database;
use AppModel\Config;
use AppController\Table\Table;

/**
 * @class App
 */
class App
{

    private static $_instance;
    private $db_instance;
    private static $titleSite = "PhotoExpresso";

    public function __construct()
    {

    }

    /**/

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    /**
     *
     */
    public static function load()
    {
        session_start();
        require (ROOT . '/Controllers/Autoloader.php');
        AppController\Autoloader::chargementClass();
        
        require(ROOT . '/Models/Autoloader.php');
        AppModel\Autoloader::chargementClass();
    }

    /*      
     * 
     */
       public function getTable($name)
       {
           $class_name = '\\AppController\\Table\\' . ucfirst($name) . 'Table';
           return new $class_name($this->getDb());
       }   
    


    public function getDb()
    {
        if (is_null($this->db_instance)) {
            $config = Config::getInstance(ROOT.'/public/Config.php');
            $this->db_instance = new Database ($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;
    }

    public static function setTitle($title)
    {
        self::$title = $title . ' ' . self::$title;
    }

    /**
     * @return string
     */
    public static function getTitle()
    {
        return self::$title;
    }


}


<?php
use AppModel\MysqlDatabase;
use AppModel\Config;
use AppModel\TablePDO;

/**
 * @class App
 */
class App
{

    private static $_instance;
    private $db_instance;
    private $title;
    
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
        require(ROOT . '/Controllers/Autoloader.php');
        AppController\Autoloader::chargementClass();

        require(ROOT . '/Models/Autoloader.php');
        AppModel\Autoloader::chargementClass();
    }

    /*      
     * 
     */
    public function getDb()
    {
        //echo "getDb: ". is_null($this->db_instance)."\n ".var_dump($this->db_instance);
        if (is_null($this->db_instance)) {
            $config = Config::getInstance(ROOT . '/public/Config.php');
            // echo $config->get('db_name')."<br>".$config->get('db_user')."<br>".$config->get('db_pass')."<br>"
            // .$config->get('db_host')."<br>";
            $this->db_instance = new MysqlDatabase($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;
    }

    public function getTable($name)
    {
        $class_name = '\\AppController\\TablePDO\\' . ucfirst($name) . 'Table';
       // echo $class_name;
        if($this->getDb()== null)
            die("die");
        
       /* else
            echo get_class($this->getDb());*/
        return new $class_name();
        //return new $class_name($this->getDb());
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


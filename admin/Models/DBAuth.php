<?php
namespace AppModel;
//use AppModel\Database;

class DBAuth
{

    private $db;
    public function __construct(DatabasePDO $db)
    {
        $this->db = $db;
    }
    
    /**
     * @brief permet de rétourner un user .
     * @param [in] $login .
     * @param [in] $password.
     * @return boolean.
     */
    public function login($login, $password)
    {
        $user = $this->db->prepare('SELECT a.idPersonne as id,password as pass 
                                    FROM administrateur a 
                                    LEFT JOIN personne p ON a.idPersonne = p.idPersonne  
                                    WHERE p.login=?', [trim($login)], null, true);
        
        if ($user) {
           if ($user->pass === $password) {
               $_SESSION['auth'] = $user->id;
                return true;
            }
        }
        return false;
    }

    public function logged()
    {
        return isset($_SESSION['auth']);
    }

    public function forbidden()
    {
//      header ('HTTP/1.0 403 Forbidden');
        die ('Acces interdit ou vous êtes plus connecté, veuillez vous connectez <a href="../index.php?p=login" >en 
        cliquant ici </a>');
        header ('location: ../index.php');
    }
            
    public function notFound()
    {
        require ROOT . '/pages/404.php';
    }

    public function getUserId()
    {
        if ($this->logged())
            return $_SESSION['auth'];
        else
            return false;
    }
    
}
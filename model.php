<?php
require_once'ModeleBDD.php';

/*
 * *****************************************************************************************
 * *****************************************************************************************
 * ******************************* Connexion Personne  *************************************
 * *****************************************************************************************
 * *****************************************************************************************
 */

class Connexion extends ModeleBDD {

    private $login;
    private $password;
    private $bdd;

    public function __construct($login, $password) {
        $this->login = $login;
        $this->password = $password;
        $this->bdd = bdd();
    }

    public function verification_connexion() {
        $requete = $this->bdd->prepare('Select * from personne where login = :login');
        $requete->execute(array('login' => $this->login));
        $reponse = $requete->fetch();
        if ($reponse) {
            if ($this->password == $reponse['password']) {
                return 'ok';
            } else {
                $erreur = 'Le mot de passe saisi est incorrect';
                return $erreur;
            }
        } else {
            $erreur = 'Ce login  n\'existe pas!!';
            return $erreur;
        }
    }

    public function session() {
        $requete = $this->bdd->prepare('select * from personne where login = :login');
        $requete->execute(array('login' => $this->login));
        $donnees = $requete->fetch();
        $_SESSION['idPersonne'] = $donnees['idPersonne'];
		$_SESSION['level'] = 1;
        setcookie('idPersonne', $donnees['idPersonne'], time() + 3600 * 24 * 3, '/', 'group1.estiam.com', false, true);
        return 1;
    }

}

/*
 * *****************************************************************************************
 * *****************************************************************************************
 * ****************************** Connexion Persistante  ***********************************
 * *****************************************************************************************
 * *****************************************************************************************
 */

class ConnexionPersistante extends ModeleBDD {

    private $IdPersonne;
    private $bdd;

    public function __construct($IdPersonne) {
        $this->IdPersonne = $IdPersonne;
        $this->bdd = bdd();
    }

    public function session2() {
        $requete = $this->bdd->prepare('select * from personne where idPersonne = :IdPersonne');
        $requete->execute(array('IdPersonne' => $this->IdPersonne));
        $donnees = $requete->fetch();
        $_SESSION['idPersonne'] = $donnees['idPersonne'];
       // $_SESSION['level'] = $donnees['level'];
        //$_SESSION['typePersonne'] = $donnees['typePersonne'];
        //setcookie('idPersonne', $donnees['idPersonne'], time() + 24 * 3600, '/', 'localhost', false, true);
        //     setcookie('idPersonne', $donnees['idPersonne'],time()+3600*24*3);
        return 1;
    }

}


?>
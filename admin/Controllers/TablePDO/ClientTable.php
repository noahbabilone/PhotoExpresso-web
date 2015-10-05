<?php

namespace AppController\TablePDO;

use AppModel\TablePDO;

class ClientTable extends TablePDO{
    
    public function all()
    {
        return $this->query("SELECT * 
                      FROM personne p 
                      LEFT JOIN client c ON p.idPersonne = c.idPersonne ");
   
    }
    
     public function listesClients($limit =10)
    {
        return $this->query("SELECT p.idPersonne,p.nom,p.prenom,p.codePostal,p.ville,p.pays  
                      FROM personne p 
                      LEFT JOIN client c ON p.idPersonne = c.idPersonne 
                      ORDER BY p.idPersonne DESC LIMIT ".$limit);
   
    }
    
    
    public function listesUsers($user)
    {
        return $this->query("SELECT DISTINCT ({$user}.id".ucfirst($user).") ,p.idPersonne,p.nom,p.prenom,p.codePostal,p.ville,p.pays  
                      FROM {$user} NATURAL JOIN personne p");
   
    }
    
       public function listesAdmins()
    {
        return $this->query("SELECT DISTINCT (a.idAdministrateur),p.idPersonne,p.nom,p.prenom,p.codePostal,p.ville,p.pays  
                      FROM administrateur a 
                      NATURAL JOIN personne p");
   
    }
    
    
    
    
    
}
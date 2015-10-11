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
        return $this->query("SELECT c.idClient,p.idPersonne,p.nom,p.prenom,p.codePostal,p.ville,p.pays  
                      FROM  client c 
                      LEFT JOIN personne p ON p.idPersonne = c.idPersonne 
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
    
    
   
     public function delete($idClient)
    {
        $result= $this->query("DELETE FROM client WHERE idClient='{$idClient}'");
        return $result?true:false;
    }
    
    public function getClient($idClient)
    {
        return  $this->db->query("SELECT c.idClient,p.nom,p.prenom,p.adresse, p.codePostal,p.ville,p.pays,p.telPortable,p.telFixe,p.login,
                                    c.codePostalFacturation,c.adresseFacturation,c.villeFacturation,c.paysFacturation
                                     ,c.commentaireLivraison
                      FROM client c 
                      LEFT JOIN personne p ON p.idPersonne = c.idPersonne 
                      WHERE c.idClient=".$idClient,get_class($this),true);
   
    }
    
    
}
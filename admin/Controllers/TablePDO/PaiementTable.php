<?php

namespace AppController\TablePDO;

use AppModel\TablePDO;

class PaiementTable extends TablePDO{
    
    public function all()
    {
        return $this->query("SELECT * 
                      FROM personne p 
                      LEFT JOIN client c ON p.idPersonne = c.idPersonne ");
   
    }
    
    
     public function lists($limit =10)
    {
        return $this->query("SELECT p.idPersonne,p.nom,p.prenom,p.codePostal,p.ville,p.pays  
                      FROM personne p 
                      LEFT JOIN client c ON p.idPersonne = c.idPersonne 
                      ORDER BY p.idPersonne DESC LIMIT ".$limit);
   
    }
    
    
    
}
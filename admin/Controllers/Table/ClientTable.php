<?php

namespace AppController\Table;

use AppModel\Table;

class ClientTable extends Table{
    
    public function all()
    {
        return $this->query("SELECT * 
                      FROM personne p 
                      LEFT JOIN client c ON p.idPersonne = c.idPersonne ");
   
    }
    
}
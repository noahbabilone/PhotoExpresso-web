<?php

namespace AppController\Table;

use AppModel\TablePDO;

class ClientTablePDO extends TablePDO{
    
    public function all()
    {
        return $this->query("SELECT * 
                      FROM personne p 
                      LEFT JOIN client c ON p.idPersonne = c.idPersonne ");
   
    }
    
}
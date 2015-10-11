<?php

namespace AppController\TablePDO;

use AppModel\TablePDO;

class ProduitTable extends TablePDO{
    
    public function all()
    {
        return $this->query("SELECT * 
                      FROM personne p 
                      LEFT JOIN client c ON p.idPersonne = c.idPersonne ");
   
    }
    
    
     public function listesProduits($limit =10)
    {
        return $this->query(" ".$limit);
   
    }  
    
    public function listesFormats($limit =10)
    {
        return $this->query("SELECT f.idFormats, f.libelleFormat, f.hauteur, f.largeur, f.prix, t.libelle 
                             FROM formats f LEFT JOIN typeformats t ON f.idTypePapier = t.idTypeFormats 
                             ORDER BY f.idFormats DESC LIMIT ".$limit);
   
    }
    
     
    public function listes  ($limit =10)
    {
        return $this->query("SELECT idFo
                             FROM formats 
                             ORDER BY idFormats DESC ".$limit);
   
    }
    
    public function deleteFromat($id)
    {
        $result= $this->query("DELETE FROM formats WHERE idFormats='{$id}'");
        return $result?true:false;
    }
    
    
    
    
    
    
}
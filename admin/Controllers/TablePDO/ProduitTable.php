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
        return $this->query("SELECT f.idFormats, f.libelleFormat, f.hauteur, f.largeur, f.prix, t.libelle,tp.finition,tp.couleur
                             FROM formats f LEFT JOIN typeformats t ON f.idTypePapier = t.idTypeFormats 
                             LEFT JOIN typepapier tp ON tp.idTypePapier=f.idTypeFormats
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
    
    
    public function allFormatType()
    {
        return $this->query("SELECT idTypeFormats, libelle FROM typeformats ");
    }
    
     public function allFormatPapier()
    {
        return $this->query("SELECT idTypePapier, finition, couleur FROM typepapier ");
    }
    
    
    public function addFormat($titre,$hauteur,$largeur,$prix,$idTypePapier,$idTypeFormat)
    {
            $result= $this->db->query("INSERT INTO formats SET libelleFormat='{$titre}',hauteur='{$hauteur}',largeur='{$largeur}',
      idTypePapier='{$idTypePapier}',prix='{$prix}', idTypeFormats ='{$idTypeFormat}',idAdministrateur='7'"  );

         return $result?true:false;

    }
    
    
    
    
    
    
    
    
    
}
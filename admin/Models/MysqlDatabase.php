<?php

	namespace AppModel;
	use \PDO;

	/**
	* @Class Database
	*/
	class  MysqlDatabase extends DatabasePDO{
		private $db_name;
		private $db_user;
		private $db_pass;
		private $db_host;
		private $pdo;


		public function __construct($db_name="test", $db_user="root", $db_pass="root",$db_host="localhost")
		{

			$this->db_name = $db_name;
			$this->db_user = $db_user;
			$this->db_pass = $db_pass;
			$this->db_host = $db_host;
		}

		private function getPDO()
		{
			if ($this->pdo === null)
			{
			    try {
                $bdd = new PDO('mysql:host=sql.group1.estiam.com;dbname=photoexpressodb;charset=utf8', 'yannick', 'estiam94');
                //echo 'mysql:host='.$this->db_host.';dbname='.$this->db_name.';charset=utf8'.$this->db_user.
                //$this->db_pass ."<br>";
    /*                $bdd = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name.';charset=utf8',$this->db_user, $this->db_pass);*/
				$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				$this->pdo= $bdd;
                                } catch (PDOException $e) {
                    print "Erreur !: " . $e->getMessage() . "<br/>";
                    die();
                }
			}
           // var_dump($this->pdo);
			return $this->pdo;
		}


		public function query($sql, $class_name=null,$one =false)
		{
			$req = $this->getPDO()->query($sql);
             if (
                strpos($sql, 'UPDATE') === 0 ||
                strpos($sql, 'INSERT') === 0 ||
                strpos($sql, 'DELETE') === 0 
            ){
                return $req;
            }
            
			if ($class_name=== null){
				$req->setFetchMode(PDO::FETCH_OBJ);
			}else{
				$req->setFetchMode(PDO::FETCH_CLASS, $class_name);

			}

			if ($one)
				$datas = $req->fetch();
			else
				$datas = $req->fetchAll();
			return $datas;
		}


		public function prepare($sql, $attibut, $class_name=null, $one =false)
		{
			$req=$this->getPDO()->prepare($sql);
			$res =$req->execute($attibut);
            if (
                strpos($sql, 'UPDATE') === 0 ||
                strpos($sql, 'INSERT') === 0 ||
                strpos($sql, 'DELETE') === 0 
            ){
                return $res;
            }
            
            if ($class_name=== null){
				$req->setFetchMode(PDO::FETCH_OBJ);
			}else{
				$req->setFetchMode(PDO::FETCH_CLASS, $class_name);

			}
            
			if ($one)
				$datas = $req->fetch();
			else
				$datas = $req->fetchAll();
			return $datas;

		}
        
        public function lastInsertId(){
            return $this->getPDO()->lastInsertId();
        }
	}


<html lang="fr">
<?php
            
        include 'connexion_BDD.php';
        
	 $name = $_POST['name']; 
         $First_name =$_POST['First_name']; 
	 $email =$_POST['email']; 
	 $adresse =$_POST['adresse']; 
	 $code_postal =$_POST['code_postal']; 
	 $ville =$_POST['ville']; 
	 $pays =$_POST['pays']; 
	 $num_tel =$_POST['num_tel'];
	 $num_fixe =$_POST['num_fixe']; 
	 $login =$_POST['login'];  
	 $password =md5($_POST['password']);
        
		
		 if( !empty($_POST['name']) and !empty($_POST['First_name']) and !empty($_POST['email']) and !empty($_POST['adresse']) and !empty($_POST['code_postal']) and !empty($_POST['ville']) and !empty($_POST['pays']) and !empty($_POST['num_tel']) and !empty($_POST['num_fixe']) and !empty($_POST['login']) and !empty($_POST['password'])){
		
		$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING); 
 
                $resultats=$bdd->prepare("INSERT INTO personne (nom , prenom , email, adresse, codePostal , ville, pays, telPortable ,telFixe,login, password ) VALUES(:nom,:prenom, :email,:adresse,:codePostal,:ville,:pays,:telPortable,:telFixe,:login,:password)");
                $resultats->execute( array (
			
				":nom"=>$name,
				":prenom"=> $First_name,
				":email"=> $email,
				":adresse"=>$adresse,
			        ":codePostal"=> $code_postal,
				":ville"=>$ville,
				":pays"=>$pays,
			        ":telPortable"=> $num_tel,
				":telFixe"=> $num_fixe,
				":login"=> $login,
			        ":password"=> $password
 
 
							));
		if(TRUE){
            echo '
                        <script type="text/javascript">
                            alert("vous etes desormis inscrit!! un mail de confirmation va etre envoye");
                            window.location.href="index.html";
                                    </script>';
                }
                 }
                else{ // Sinon
                    echo "Failed t'as pas rentre tous les champs!!";
                     }
			
			?>


</html>

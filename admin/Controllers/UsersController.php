<?php

namespace AppController;

class UsersController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->loadModel("Client");
        $this->loadModel("Commande");
        $this->loadModel("Produit");
        ///$this->loadModel("Category");
    }

    public function index()
    {
        $clients = $this->Client->listesClients();
        $commandes = $this->Commande->lists();
        $formats = $this->Produit->listesFormats();
        $this->render('index', compact("clients", "commandes", "formats"));
    }

    public function logout()
    {
        session_unset(); // On détruit les variables de notre session
        session_destroy(); // On détruit notre session
        header('location: ../index.php');

    }

    public function commandes()
    {
        $commandes = $this->Commande->all();
        $this->render('commandes', compact("commandes"));
    }
    
    public function getCommande($idCommande)
    {
        $commande = $this->Commande->getCommande($idCommande);
        $this->popup('viewCommande', compact("commande"));
    }

    /*
     * 1:En cours d'impression,2: Imprimée, 3:Expédiée,4:Annulée
     * */
    public function etatCommande($idEtat = 1)
    {

        $commandes = $this->Commande->etats($idEtat);
        $this->render('commandesView', compact("commandes"));
    }

    public function produits()
    {

        $formats = $this->Produit->listesFormats();
        $this->render('produits', compact("formats"));
    }

    public function ajoutProduit()
    {
        $this->render('ajoutProduit');
    }

    public function users()
    {
        $clients = $this->Client->listesClients();
        $admins = $this->Client->listesAdmins();

        $this->render('user', compact("clients","admins"));
    }
    
    public function clients(){
        $clients = $this->Client->listesClients();
        $this->render('clients', compact("clients","admins"));
    }
    
    
   

    /* public function addArticle()
     {
         if (!empty($_POST)) {
             $result = $this->Article->add([
                 'titre' => $_POST['titre'],
                 'contenu' => $_POST['contenu'],
                 'categorie_id' => $_POST['categorie']
             ]);
         }
         $categories = $this->Category->All();
         if (isset($result))
             $this->render('admin.articles.add', compact('categories', 'result'));
         else
             $this->render('admin.articles.add', compact('categories'));
 
     }
 
     public function editArticle()
     {
 
         if (!empty($_POST)) {
             $result = $this->Article->update($_POST['id_article'], [
                 'titre' => $_POST['titre'],
                 'contenu' => $_POST['contenu'],
                 'categorie_id' => $_POST['categorie']
             ]);
         }
         $categories = $this->Category->All();
         $article = $this->Article->find($_GET['id']);
 
         if (isset($result))
             $this->render('admin.articles.edit', compact('article', 'categories', 'result'));
         else
             $this->render('admin.articles.edit', compact('article', 'categories'));
     }
 
     
     public function deleteArticle()
     {
         $result = false;
         if (!empty($_POST)) {
             $result = $this->Article->delete($_POST['id']);
         }
         $this->render('admin.articles.delete', compact('result'));
 
     }
 
     public function addCategory()
     {
 
         if (!empty($_POST)) {
             $result = $this->Category->add([
                 'titre' => $_POST['titre'],
             ]);
         }
         if (isset($result))
             $this->render('admin.categories.add', compact('result'));
         else
             $this->render('admin.categories.add');
 
     }
 
     public function editCategory()
     {
 
         if (!empty($_POST)) {
             $result = $this->Category->update($_POST['id'], [
                 'titre' => $_POST['titre'],
             ]);
         }
         $category = $this->Category->find($_GET['id']);
         if (isset($result))
             $this->render('admin.categories.edit', compact('category', 'result'));
         else
             $this->render('admin.categories.edit', compact('category'));
     }
 
 
     public function deleteCategory()
     {
         $result = false;
         if (!empty($_POST)) {
             $result = $this->Category->delete($_POST['id']);
         }
         $this->render('admin.categories.delete', compact('result'));
 
     }*/


}
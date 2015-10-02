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
        ///$this->loadModel("Category");
    }

    public function index()
    {
        var_dump($this->Client->all());
        $this->render('index');
    }
    
    public function commandes()
    {
         $this->render('commandes');
    }
    
    public function produits()
    {
         $this->render('produits');
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
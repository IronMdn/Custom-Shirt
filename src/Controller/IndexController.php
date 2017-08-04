<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 13/07/2017
 * Time: 15:25
 */

namespace Controller;


/**
 * Class IndexController
 * @package Controller
 */
class IndexController extends ControllerAbstract
{
    public function homePage()//renvoie la page d'accueil avec 4 chemise en bas qui sont affichées d'où la necessité
        //d'envoyer une requete pour recupérer les $produits
    {
        $produits = $this->app['produit.repository']->findAll();
        return $this->render('index.html.twig', ['produits' => $produits]);
    }

    public function indexAction()//renvoie la page pret-a-porter d'où la necessité d'envoyer une requete pour recupérer
        // tous les $produits
    {
        $produits = $this->app['produit.repository']->findAll();

        return $this->render('produits.html.twig', ['produits' => $produits]);
    }

    public function idAction($id)//renvoie la page template d'un seul produit lorsqu'on click sur un produit d'où la
        // necessité d'envoyer une requete pour recupérer un seul produit selon son id
    {
        $produits = $this->app['produit.repository']->findById($id);

        return $this->render('produit/produit.html.twig', ['produits' => $produits]);
    }
    
    public function contactAction(){//renvoi la page de contact lorsqu'on click sur le lien contact
        return $this->render('annexes/page_contact.html.twig');
    }
}
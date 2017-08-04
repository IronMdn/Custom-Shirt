<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 13/07/2017
 * Time: 11:11
 */

namespace Controller;

use Symfony\Component\HttpFoundation\Response;
use Service\BasketManager;
use Entity\Produit;

/**
 * Class IndexController
 * @package Controller
 */
class ProduitController extends ControllerAbstract
{


    public function ajaxApi()//traitement de la reqete ajax - filtres sur la page pret-a-porter (menu sur la gauche)
    {

        $req = "SELECT p.*, t.type, ti.nom, ti.descr, ti.composition, ti.grammage, ti.tirage, ti.fil, t.categorie_id, c.categorie 
                FROM produit p
                JOIN type t ON p.type_id = t.id
                JOIN tissu ti ON p.tissu_id = ti.id
                JOIN categorie c ON t.categorie_id = c.id";

        if(!empty($_GET)) {
            $where = [];

            foreach($_GET as $key => $value){

                if(!empty($value)){

                    if($key == 'taille'){
                        $req .= " JOIN produit_taille p_t ON p.id = p_t.produit_id 
						  JOIN taille ta ON p_t.taille_id = ta.id";
                    }

                    if($key == 'categorie'){
                        $where[] = " c.categorie = '$value'";
                    }

                    elseif($key == 'type'){
                        $where[] = " t.type = '$value'";
                    }
                    elseif($key == 'tissu'){
                        $where[] = " ti.nom = '$value'";
                    }
                    elseif($key == 'taille'){
                        $where[] = " ta.taille = '$value'";
                    }
                    elseif($key == 'sexe'){
                        $where[] = " p.sexe = '$value'";
                    }
                    elseif($key == 'prix'){
                        $where[] = " p.prix <= $value AND p.prix >= $value-50";
                    }

                }
            }

            if (!empty($where)) {
                $req .= ' WHERE ' . implode(' AND ', $where);
            }

            if($_GET['range']==='price_up') {
                $req .= " ORDER BY p.prix ASC";
            }
            if($_GET['range']==='price_down') {
                $req .= " ORDER BY p.prix DESC";
            }

            if(!empty($_GET['nombre'])) {
                $req .= " LIMIT " . $_GET['nombre'];
            }
        }

        $results = $this->app['db']->fetchAll($req);

        $produits = [];

        foreach ($results as $result) {//créqation d'un array qui va contenir tous les données retournées par la requete
            //sous forme d'objets
            $produit = $this->app['produit.repository']->buildFromArray($result);//méthode qui crée des objets à partir
            //des arrays
            $produits[] = $produit;//et on stock les objets dans un array $produits
        }


        return $this->render('produit/list.html.twig', ['produits' => $produits]);//nous envoyons le data $produits
        //à la vue list.html.twig
        //return $this->app->json($results);

    }


    public function ajaxApiPanier()//traitement de la requete ajax pour ajouter un produit dans le panier
    {

        $produit = $this->app['produit.repository']->findById($_POST['id']);//nous recupérons le produit de la BD selon son id
        $produit->setQuantite(1);
        $this->app['basket.manager']->putProductToBasket($produit);//et nous l'envoyons à la méthode putProductToBasket()
        
        return new Response('');//nous avons besoin de renvoyer une réponse à la requete ajax qui est en POST pour éviter erreur 500
    }

}
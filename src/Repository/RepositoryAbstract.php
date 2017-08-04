<?php

namespace Repository;

use Doctrine\DBAL\Connection;

abstract class  RepositoryAbstract//cette méthode traite les requete de insert et de update dans la BD
{
    /**
     *
     * @var Connection
     */
    protected $db; //récupère ce que l'ont récupère avec $app($db)
    
    /**
     * RepositoryAbstract constructor
     * @param Connection $db
     */
    public function __construct(Connection $db)//au mement d'instantiaion d'objet de la classe héritier de celle-là
        //on lui transmet l'objet Connection $db de la connecion à la BD (d'où use Doctrine\DBAL\Connection en haut)
    {
        $this->db = $db;
    }
    
    public function persist(array $data, array $where = null)//requete insert ou update
    {
        if(empty($where))
        {
            $this->db->insert
            (
                    $this->getTable(),
                    $data
            );
        }
        else
        {
            $this->db->update
            (
                    $this->getTable(),
                    $data,
                    $where
            );
        }
    }
    
    /**
     * Retourne le nom de la table que traite le repository
     * 
     * @return string
     */
    abstract public function getTable();
}

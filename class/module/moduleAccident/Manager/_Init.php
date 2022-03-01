<?php 

/** require_once dirname(__DIR__)."/Object/_Init.php"; */

class ManagerObject{


    /**
     * Attribut contenant l'instance représentant la BDD.
     * @type PDO
     */

    protected $db;
    private $table_name = TABLE;

    /**
     * Constructeur étant chargé d'enregistrer l'instance de PDO dans l'attribut $db.
     * @param $db PDO Le DAO
     */

    public function __construct()
    {
        require_once dirname(__DIR__,4)."/config/init_db.php";
        $database = new DB();
        $this->db = $database->getMysqlConnexionWithPDO();
    }

    /**
     * Add object
     */
        /* public function addObject(ExempleObject &$object){

            $result=array();
            $requette = "INSERT INTO ".$this->table_name." (table_name) VALUES (:table_name) ";
            $requette_base = $this->db->prepare($requette);
            $requette_base->execute(array("table_name"=>$table_value));

            if($requette_base->rowCount()){

                $object->set_id($this->db->lastInsertId());
                $result["message"]="true";
                
            }else{
                $result["message"]="false";
            }


        } */

    /**
     * Get one object
     */

        /* public function getOneObject(ExempleObject $object){

            $result = array();
            
            $requette = "SELECT * FROM ".$this->table_name." WHERE id=:id";
            $requette_base = $this->db->prepare($requette);
            $requette_base->execute(array("id"=>$object->id()));

            if($requette_base->rowCount()){
                $result["message"]="true";
                $result["object"]=$requette_base->fetchAll(PDO::FETCH_ASSOC);
            }else{
                $result["message"]="false";
            }
            $requette_base->closeCursor();

            return $result;

        } */

    /**
     * Get all object
     */

        /* public function getAllObject(){

            $result = array();
            
            $requette = "SELECT * FROM ".$this->table_name;
            $requette_base = $this->db->prepare($requette);
            $requette_base->execute();

            if($requette_base->rowCount()){
                $result["message"]="true";
                $result["object"]=$requette_base->fetchAll(PDO::FETCH_ASSOC);
            }else{
                $result["message"]="false";
            }
            $requette_base->closeCursor();

            return $result;


        } */

    /**
     * Update object
     */

        /* public function updateObject(ExempleObject $object){

            $result = array();
            $requette="UPDATE ".$this->table_name." SET table_name=:table_name WHERE id=:id";

            $requette_base=$this->db->prepare($requette);
            $requette_base->execute(array("table_name"=>$table_value,"id"=>$object->id()));

            if($requette_base->rowCount()){
                $result["message"]="true";
            }else{
                $result["message"]="false";
            }

            $requette_base->closeCursor();
            return $result;


        } */

    /**
     * Delete a object
     */

        /* public function deleteObject(ExempleObject $object){

            $result = array();
            $requette = "DELETE FROM ".$this->table_name." WHERE id=:id";
            $requette_base = $this->db->prepare($requette);
            $requette_base->execute(array("id"=>$object->id()));

            if($requette_base->rowCount()){
                $result["message"]="true";
            }else{
                $result["message"]="false";
            }

            $requette_base->closeCursor();

            return $result;


        } */

}

?>
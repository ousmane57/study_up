<?php 

class ExempleObject {

    protected $id;


    /**
     * Constructeur de la classe qui assigne les données spécifiées en paramètre aux attributs correspondants.
     * @param $valeurs array Les valeurs à assigner
     * @return void
     */

        public function __construct($valeurs = [])
        {
            if (!empty($valeurs)) // Si on a spécifié des valeurs, alors on hydrate l'objet.
            {
                $this->hydrate($valeurs);
            }
        }

    /**
     * Méthode assignant les valeurs spécifiées aux attributs correspondant.
     * @param $donnees array Les données à assigner
     * @return void
     */

        public function hydrate($donnees)
        {
            foreach ($donnees as $attribut => $valeur)
            {
                $methode = 'set_'.strtolower($attribut);

                if (is_callable([$this, $methode]))
                {
                    $this->$methode($valeur);
                }
            }
        }

    /**
     * Getters
     */

        public function id()
        {
            return $this->id;
        }

    /**
     * Setters
     */

        public function set_id($id)
        {
            return $this->id = $id;
        }

}


?>
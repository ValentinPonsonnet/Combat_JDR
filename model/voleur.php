<?php 
    class Voleur
    {
        //Caratéristique du voleur
        private $nom;
        private $premon;
        private $lifePoint = 10;
        private $attack = 50;
        private $resist = 100;

        //constructeur du guerrier

        function __construct($nom,$premon)
        {
           $this->nom = $nom;
           $this->premon = $premon; 
        }
       public function identity()
       {
           $this->nom;
           $this->prenom;
       }

    }

?>
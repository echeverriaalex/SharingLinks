<?php
    namespace Controllers;

    use Model\Link;
    use PDO\LinkPDO;

    class LinkController{

        private $linkPDO;
        
        public function __construct(){
            
            $this->linkPDO = new LinkPDO();
        }

        public function List(){

            $linkList = $this->linkPDO->GetAll();
            //var_dump($linkList);
            require_once(VIEWS_PATH. "list-link.php");
        }

        public function Add($link = null, $fecha = null){

            $this->linkPDO->Add($link, $fecha);
            echo "<script> alert('Ticket registrado con exito'); </script>";
            HomeController::Index();
        }

        /*
        public function Index(){

            require_once(VIEWS_PATH. "add-link.php");
        }
        */
    }
?>
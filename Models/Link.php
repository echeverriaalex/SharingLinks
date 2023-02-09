<?php
    namespace Models;

    class Link{

        private $link;
        private $fecha;

        function __construct($link="", $fecha=""){

            $this->setLink($link);
            $this->setFecha($fecha);
        }

        public function setLink($link){$this->link = $link;}
        public function getLink(){return $this->link;}

        public function setFecha($fecha){$this->fecha = $fecha;}
        public function getFecha(){return $this->fecha;}
    }
?>
<?php
    namespace Controllers;

    class HomeController
    {
        public static function Index()
        {
            echo "HOME ";
            require_once(VIEWS_PATH."add-link.php");
        }
    }
?>
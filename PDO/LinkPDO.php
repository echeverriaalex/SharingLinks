<?php
    namespace PDO;

    use Models\Link;
    use PDOException;

    class LinkPDO{

        private $connection;
        private $tableName = "Links";

        public function GetAll(){
            try{
                $linkList = array();
                $query = "select * from $this->tableName;";
                $this->connection = Connection::GetInstance();
                $linkResults = $this->connection->Execute($query);

                foreach($linkResults as $row){

                    //echo "<br> EN EL PDO<br> ";
                    //var_dump($row);
                    $link = new Link();
                    $link->setLink($row['link']);
                    $link->setFecha($row['fecha']);
                    //echo "<br> Link --> " . $link->getLink();
                    //echo "<br> Fecha --> " . $link->getFecha();
                    //echo "<br> <br> ";
                    array_push($linkList, $link);
                }
                return $linkList;
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }

        public function Add($link, $fecha){

            try{
                $query = "insert into $this->tableName (link, fecha) values (:link, :fecha);";
                $this->connection = Connection::GetInstance();
                $parameters['link'] = $link;
                $parameters['fecha']= $fecha;
                $this->connection->ExecuteNonQuery($query, $parameters);
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }
    }
?>
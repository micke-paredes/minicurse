<?php
ini_set('display_errors','Off');
error_reporting(E_ALL);

/**
 *
 */
class Database
{
    public $host="localhost";
    public $user="polaroidx";
    public $pass="test123";
    public $db="minicurse";
    public $link;
    static $_instance;

    public function __construct()
    {
        $this->link = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        ) or die("Error while try connect.");

    }

    private function __clone(){}

    public static function getInstance(): ?DataBase
    {
        if(!(self::$_instance instanceof self)):
            self::$_instance = new self();
        endif;
        return self::$_instance;
    }

    public function getAllRow($sqlStatement){
        $dataArray = [];
        $response = mysqli_query($this->link, $sqlStatement);
        if($response != false):
            while($row = mysqli_fetch_assoc($response)):
                $dataArray[] = $row;
            endwhile;
            return $dataArray;
        else:
            return false;
        endif;
    }

    public function getOnlyRow($sqlStatement){
        $response = mysqli_query($this->link, $sqlStatement);
        if($response!=false):
            return mysqli_fetch_assoc($response);
        else:
            return false;
        endif;
    }

    public function exec($sqlStatement){
        $response = mysqli_query($this->link,$sqlStatement);
        if($response!=false):
            return true;
        else:
            return false;
        endif;
    }

    public function __destruct(){
        $this->link = null;
    }



}

$Database = new Database;
?>
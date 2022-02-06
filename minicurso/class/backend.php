<?php
ini_set("display_errors", "On");
require_once '../config/class.Database.php';

class Backend {

    public $insertData = "insertData";
    public $link = null;

    public function __construct()
    {
        $this->link = new Database();
    }

    public function insertForm()
    {
        $apiKey = isset($_POST["apiKey"]) ? $_POST["apiKey"] : null; 
        $fullName = isset($_POST["fullName"]) ? $_POST["fullName"] : null; 
        $lastName = isset($_POST["lastName"]) ? $_POST["lastName"] : null; 
        $email = isset($_POST["email"]) ? $_POST["email"] : null; 
        $phone = isset($_POST["phone"]) ? $_POST["phone"] : null; 
        $street = isset($_POST["street"]) ? $_POST["street"] : null; 
        $internalNumber = isset($_POST["internalNumber"]) ? $_POST["internalNumber"] : null; 
        $externalNumber = isset($_POST["externalNumber"]) ? $_POST["externalNumber"] : null; 
        $state = isset($_POST["state"]) ? $_POST["state"] : null; 
        $city = isset($_POST["city"]) ? $_POST["city"] : null; 
        $municipality = isset($_POST["municipality"]) ? $_POST["municipality"] : null; 
        $colony = isset($_POST["colony"]) ? $_POST["colony"] : null;  
        $zipCode = isset($_POST["zipCode"]) ? $_POST["zipCode"] : null;

        if($apiKey == $this->insertData) {
            $registerUser = $this->link->exec("INSERT INTO catalog_users(name, surname) VALUES ('".$fullName."', '".$lastName."')");
            if($registerUser) {
                $message["msn-register-user"] = "The user was registered successfully.";
            }
            $message["msn"] = "Action complete";
            $message["status"] = 200;
            echo json_encode($message);
        }
    }

    public function __destruct()
    {
        $this->link = null;
    }

}

$backend = new Backend();
$backend->insertForm();
<?php
require "DBUsers.php";
require "IUsers.php";
require "RegistraciaUser.php";

class RegistrujApp
{
    private $storage;

    public function __construct()
    {
         $this->storage = new DBUsers();

          if (isset($_POST['registrovat'])) {
              $this->storage->addUser(new registraciaUser($_POST['username'], $_POST['password']));
          }

     }

        public function getAllUsernames() {
            return $this->storage->getAllUsernames();
        }

}
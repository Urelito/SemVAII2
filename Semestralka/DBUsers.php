<?php

class DBUsers // implements IUsers
{

    private $databaza;

    public function __construct()
    {
        $this->databaza = new mysqli('localhost', 'root','dtb456', 'dbforum');
        $this->checkDBErrors();
    }

    public function getAllUsernames()
    {
        $result = [];
        $sql = "SELECT * FROM user";
        $dbResult = $this->databaza->query($sql);
        if ($dbResult.num_rows > 0) {
            while ($record = $dbResult->fetch_assoc()) {
                $result[] = new DBUsers($record['username']);
            }
        }
    }


    public function addUser(RegistraciaUser $registraciaUser)
    {
        $stnt = $this->databaza->prepare("INSERT INTO user(username, password) VALUES (?,?)");
        $username = $registraciaUser->getUsername();
        $password = $registraciaUser->getPassword();
        $stnt->bind_param('ss', $username, $password);
        $stnt->execute();
        $this->checkDBErrors();
    }

    private function checkDBErrors() {
        if ($this->databaza->error) {
            die("DB error:" . $this->databaza->error);
        }
    }

}
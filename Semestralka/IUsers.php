<?php

interface IUsers
{
    public function getAllUsernames();
    public function addUser(RegistraciaUser $registraciaUser);

}
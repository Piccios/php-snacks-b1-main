<?php

require_once __DIR__ . "/User.php";
require_once __DIR__ . "/Membership.php";
class PremiumUser extends User {
    private $Membership;

    public function __construct ($name,$email, Membership $Membership){
        parent::__construct($name, $email);
        $this->setMembership($Membership);

    }

    public function getMembership(){
        return $this -> Membership;
    }

    public function setMembership(Membership $Membership){
        $this-> Membership = $Membership;
    }
}



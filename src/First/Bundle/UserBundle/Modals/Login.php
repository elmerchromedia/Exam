<?php
namespace First\Bundle\UserBundle\Modals;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Elmer Malinao
 */
class Login {
    private $username;
    private $password;
    public function getUsername() {
        return $this->email;
    }

    public function setemail($username) {
        $this->email = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }


}


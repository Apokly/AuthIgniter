<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User {

    public $id;
    public $password;
    public $mail;

    public function hashPassword() {
        $this->password = sha1($this->password);
    }

}
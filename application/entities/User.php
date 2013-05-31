<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User {

    public $id;
    public $password;
    public $mail;

    public function cryptPassword() {
        $this->password = md5($this->password);
    }

}
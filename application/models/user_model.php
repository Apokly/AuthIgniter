<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    const TABLE = 'user';

    public function __construct() {
        parent::__construct();
    }


    public function add(User $user) {
        $user->hashPassword();
        $this->db->insert(self::TABLE, $user);
        return $this->db->insert_id();
    }

}
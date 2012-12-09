<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserController extends CI_Controller {

    public function __construct() {
        parent::__construct();

        require_once APPPATH . 'entities/User.php';

        $this->load->library(array('form_validation'));
        $this->load->helper(array('form', 'url'));
        $this->load->model('user_model', 'users');
    }

    public function loginAction() {

    }

    public function logoutAction() {

    }

    public function registerAction() {
        $validationRules = array(
            array(
                'field' => 'mail',
                'label' => 'mail adress',
                'rules' => 'required|valid_email'
            ),
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ),
            array(
                'field' => 'passwordConfirmation',
                'label' => 'password confirmation',
                'rules' => 'required|matches[password]'
            )
        );

        $this->form_validation->set_rules($validationRules);

        if($this->form_validation->run()) {
            $user = new User();

            foreach($_POST as $key => $value) {
                if($key !== 'passwordConfirmation') {
                    $user->$key = $this->input->post($key);
                }
            }

            $this->users->add($user);

            $this->load->view('AuthIgniter/registrationCompleted');

        }
        else {
            $this->load->view('AuthIgniter/register');
        }
    }

}
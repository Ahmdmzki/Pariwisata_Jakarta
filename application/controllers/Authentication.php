<?php

class Authentication extends CI_Controller
{
    private $users;
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->users = new Users();
    }

    public function login()
    {
        $this->users->setLoginRules();
        $this->users->login();
        $this->loadLoginView();
    }

    public function register()
    {
        $this->users->setRegisterRules();

        $this->users->register();
        $this->loadRegisterView();
    }

    public function logout()
    {
        $users = new Users();
        $users->logout();
    }

    private function loadRegisterView()
    {
        $this->redirectAuthenticatedUser();
        $this->load->view('templates/header');
        $this->load->view('auth/register');
        $this->load->view('templates/footer');
    }


    private function loadLoginView()
    {
        $this->redirectAuthenticatedUser();
        $this->load->view('templates/header');
        $this->load->view('auth/login');
        $this->load->view('templates/footer');
    }

    private function redirectAuthenticatedUser()
    {
        $is_auth = $this->session->has_userdata('id');
        if ($is_auth) {
            redirect('.');
            return;
        }
    }
}

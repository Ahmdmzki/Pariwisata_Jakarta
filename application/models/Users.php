<?php


/**
 * Kelas ini digunakan untuk data-data users
 * - Login
 * - Register
 * - Update Password
 * @author Herdy Hardiyant
 */

class Users extends CI_Model
{
    private $users_table = "users";


    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function register()
    {
        if ($this->form_validation->run() == false) {
            return;
        }
        $auth_data = $this->getAuthData();
        $this->sendDataRegistrationToDatabase($auth_data['username'], $auth_data['password']);
        $this->setUserSession($auth_data['username'], $auth_data['password']);
    }

    public function setRegisterRules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[4]|max_length[12]|is_unique[' . $this->users_table . '.username]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('repeat_password', 'Repeat Password', 'trim|required|matches[password]');
    }

    public function login()
    {
        if ($this->form_validation->run() == false) {
            return;
        }

        $user_login_data = $this->retrieveUserDataForLogin();

        if ($user_login_data  == null) {
            $this->setMessageLoginFailedFlashdata();
            return;
        }

        $this->setUserSession($user_login_data['username'], $user_login_data['password']);
    }

    public function setLoginRules()
    {
        $this->form_validation->set_rules('username', 'Login Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Login Password', 'trim|required');
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');

        redirect(".");
    }

    private function retrieveUserDataForLogin()
    {
        $auth_data = $this->getAuthData();
        $login_query = $this->db->get_where($this->users_table, $auth_data, 1);
        return  $login_query->row_array();
    }

    /**
     * Get Username & Password 
     * @return Array<String|Key, String|Value>
     * @author Herdy Hardiyant
     */
    private function getAuthData()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        return ['username' => $username, 'password' => $password];
    }

    private function setMessageLoginFailedFlashdata()
    {
        $this->session->set_flashdata("message", "<p style='color: red; margin: 1rem'>Login Failed, Username or Password is incorrect</p>");
    }

    private function sendDataRegistrationToDatabase(string $username, string $password)
    {

        $data = [
            'id' => $username . $password,
            'username' =>  $username,
            'password' => $password,
        ];

        $this->db->insert($this->users_table,  $data);
    }

    private function setUserSession(string $username, string $password)
    {

        $sessionData = [
            'id' => $username . $password,
            'username' => $username
        ];

        $this->session->set_userdata($sessionData);


        redirect('.');
    }
}

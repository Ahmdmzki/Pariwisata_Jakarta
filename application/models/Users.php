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

    /**
     * memasukkan data user ke dalam databse
     *
     * @param string  $nama_user  
     * @param string $password
     * 
     * @throws Some_Exception_Class If something interesting cannot happen
     * @author Herdy Hardiyant
     * @return Status
     */
    public function register(string $nama_user, string $password)
    {
    }

    /**
     * Check apakah user dan password sesuai di database. Fungsi ini digunakan untuk Login
     *
     * @param Place   $where  Where something interesting takes place
     * @param integer $repeat How many times something interesting should happen
     * 
     * @throws Some_Exception_Class If something interesting cannot happen
     * @author Herdy Hardiyant
     * @return Status
     */
    public function check(string $nama_user, string $password)
    {
    }

    protected $table = "users";
}

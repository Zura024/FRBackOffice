<?php

/**
 * Created by PhpStorm.
 * User: user1
 * Date: 01.02.2017
 * Time: 16:03
 */
    @session_start();

    class adminUser{

        public $user = null;

        public function __construct(){
            if(isset($_SESSION['admin'])){
                $this->user = $_SESSION['admin'];
            }
        }

        public function login($user){
            if(isset($this->user)){
                return (object) array('resultCode' => 0, 'status' => true, 'Desc' => 'Succeeded authentication', 'user' => $this->user);
            }


            $user->password = md5($user->password.md5('admin'));
            if(!preg_match('/^[a-zA-Z0-9]{5,}$/', $user->username)) {
                return (object) array('resultCode' => -3, 'status' => false, 'Desc' => 'Incorrect Username format');
            }



            $query = "SELECT `id`, `username`, `active`, `role` FROM `admin` WHERE username = '$user->username' AND password = '$user->password' AND active='1'";
            $user_set = mysql_query($query);
            if(mysql_num_rows($user_set) > 0){
                $admin = (object) mysql_fetch_assoc($user_set);
                $_SESSION['admin'] = $admin;
                $_SESSION['admin']->id=$admin->id;
                $_SESSION['admin']->role=$admin->role;

                $this->user = $user;

                return (object) array('resultCode' => 0, 'status' => true, 'Desc' => 'Succeeded authentication', 'user' => $this->user);
            } else {
                return (object) array('resultCode' => -1, 'status' => false, 'Desc' => 'username or password is incorrect');
            }
        }

        public function logout(){
            global $config;
            if(isset($this->user)){
                $this->user = null;
                unset($_SESSION['admin']);
                header('location: '.$config->domain.'/login.php');
            } else {
                header('location: '.$config->domain.'/login.php');
            }
        }


    }
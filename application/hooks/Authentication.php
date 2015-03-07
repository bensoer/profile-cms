<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 06/03/15
 * Time: 8:32 PM
 */

class Authentication extends CI_Controller{

    public function validate(){

        $this->ci = &get_instance();
        $route = $this->ci->router->fetch_class();


        if($route != "welcome"){



            $this->load->helper('cookie');

            $loggedIn = get_cookie('valid_login');

            if($loggedIn){
                return;
            }else{
                $this->load->helper('url');
                redirect("/welcome");
            }

        }
    }
}
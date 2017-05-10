<?php

class User extends CI_Controller
{
    public $redirect_uri    = "http://blog.loc/user/vk_auth";
    public $client_id       = 5240196;
    private $client_secret  = "HNpmCCcNSLY5ep0oETMH";

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->model('Model_user');
        $this->load->library('session');
        $this->load->helper('url');
    }

    /*
     * Авторизация пользователя с помощью вк
    */

    public function vk_auth()
    {
        if( isset($_GET["code"]) ) {

            $vk = json_decode( file_get_contents("https://oauth.vk.com/access_token?client_id=$this->client_id&client_secret=$this->client_secret&redirect_uri=$this->redirect_uri&code=$_GET[code]") );

            if( isset($vk->access_token) ) {

                // Получаем информацию о пользователе
                $user = json_decode( file_get_contents("https://api.vk.com/method/users.get?user_ids=$vk->user_id&fields=first_name,last_name,photo_50,photo_100,photo_200&v=5.64") );

                if( $this->Model_user->vk_auth($user->response[0]) ) {

                    $this->session->set_userdata( array("user" => (array) $user->response[0] ) );
                    // Редирект на главную
                    redirect( base_url() );

                } else {

                    // Ошибка базы
                    echo "Ошибка базы данных.";
                }

            } else {

                // Какая то ошибка, не пришел токен
                echo "Ошибка Вконтакте.";
            }

        } else {

            // Код не пришел
            show_404();
        }
    }

    /*
     * Выход из личного кабинета
    */

    public function out()
    {
        // Если пользователь авторизован
        if( isset($this->session->user["uid"]) ) {

            // Удаляем всю информацию о пользвателе
            $this->session->unset_userdata("user");
            redirect( base_url() );

        } else {

            show_404();
        }
    }

}
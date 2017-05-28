<?php

class User extends CI_Controller
{
    public $redirect_uri    = "http://shmakov-andrey.ru/user/vk_auth";
    public $client_id       = 5240196;
    private $client_secret  = "HNpmCCcNSLY5ep0oETMH";

    public $first_name;
    public $last_name;
    public $status;
    public $block;
    public $photo_50;
    public $photo_100;
    public $photo_200;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Model_user');

        $this->first_name   = isset($this->session->user["uid"]) ? $this->Model_user->get("user",$this->session->user["uid"])->first_name : null;
        $this->last_name    = isset($this->session->user["uid"]) ? $this->Model_user->get("user",$this->session->user["uid"])->last_name : null;
        $this->status       = isset($this->session->user["uid"]) ? (bool) $this->Model_user->get("user",$this->session->user["uid"])->status : null;
        $this->block        = isset($this->session->user["uid"]) ? (bool) $this->Model_user->get("user",$this->session->user["uid"])->block : null;
        $this->photo_50     = isset($this->session->user["uid"]) ? $this->Model_user->get("user",$this->session->user["uid"])->photo_50 : null;
        $this->photo_100    = isset($this->session->user["uid"]) ? $this->Model_user->get("user",$this->session->user["uid"])->photo_100 : null;
        $this->photo_200    = isset($this->session->user["uid"]) ? $this->Model_user->get("user",$this->session->user["uid"])->photo_200 : null;
    }

    /**
     * Настройка профиля пользователя
     * @param string $uid
     */

    public function setting($uid = "")
    {
        if($uid !== "")
        {
            if( $this->session->user["uid"] === (int) $uid ) {

                // Страница настройки пользователя

            } else {

                show_404();
            }

        } else {

            show_404();
        }
    }

    /**
     * Страница просмотра профиля пользователя
     * @param string $uid
     */

    public function id($uid = "")
    {
        if($uid !== "") {

            if( $this->Model_user->get("user",$uid)["count"] ) {

                // Выводим страницу для отображения информации о пользователе
                echo $this->twig->render("user.php", [
                    "base_url" => base_url(),
                    "user" => $this->session->user,
                    "title" => "Просмотр профиля",
                ]);

            } else {

                // Пользователь не сущетвует
                show_404();
            }

        } else {

            // Не указан uid пользователя
            show_404();
        }
    }

    /**
     * Авторизация при помощи Вконтакте
     */

    public function vk_auth()
    {
        if( isset($_GET["code"]) ) {

            $vk = json_decode( file_get_contents("https://oauth.vk.com/access_token?client_id=$this->client_id&client_secret=$this->client_secret&redirect_uri=$this->redirect_uri&code=$_GET[code]") );

            if( isset($vk->access_token) ) {

                // Получаем информацию о пользователе
                $user = json_decode( file_get_contents("https://api.vk.com/method/users.get?access_token=$vk->access_token&user_ids=$vk->user_id&fields=first_name,last_name,photo_50,photo_100,photo_200&v=5.64") );

                switch ($this->Model_user->vk_auth($user->response[0])) {

                    case true :

                        // Добавляем статус пользователя
                        $user->response[0]->status = $this->Model_user->get("user",$user->response[0]->uid)->status;

                        // Все вместе заносим в сессию
                        $this->session->set_userdata( array("user" => (array) $user->response[0] ) );

                        // Редирект на главную
                        redirect( base_url() );

                            break;

                    case false :

                        // Аккаунт зааблокирован
                        echo "Уважаемый {$user->response[0]->first_name}, ваш аккаунт заблокирован! ";

                            break;

                    case null :

                        // Что-то с базой данных...
                        echo "Произогла ошибка в базе данных... Повторите позднее...";

                            break;
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

    /**
     * Выход из личного кабинета
     */

    public function out()
    {

        if( isset($this->session->user["uid"]) ) {

            // Удаляем всю информацию о пользвателе
            $this->session->unset_userdata("user");

            redirect( base_url() );

        } else {

            // Пользователь не авторизован и попал на страницу выхода из личного кабинета
            show_404();
        }
    }

    /**
     * Получение информации о пользователе
     * @param $action
     * @param string $uid
     * @return mixed
     */

   /**
    public function get($action, $uid = "")
    {

        switch ($action) {

            case "action[user]" :
                return $this->Model_user->get("user",$uid);
                    break;

            case "action[block]" :
               return $this->Model_user->get("block",$uid);
                    break;
        }
    }
    */

}
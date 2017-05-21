<?php

/**
 * @property Model_user $Model_user Optional description
 */

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user');
        $this->load->model('Model_admin');
        $this->load->database();
    }

    public function index()
    {
        if( isset($this->session->user["uid"]) ) {

            if( $this->Model_user->get("user",$this->session->user["uid"])[0]["status"] ) {

                echo $this->twig->render("admin.php", array("admins" => $this->Model_admin->get(), "user" => $this->session->user, "title" => "Админ панель","block_users" => $this->Model_user->get("block") ));

            } else {

                show_404();
            }
        } else {

            show_404();
        }
    }

    /**
     * Действия администратора
     * @param $action
     * @param $uid
     */

    public function action($action, $uid)
   {

        if( isset($this->session->user["uid"]) && $this->Model_user->get("user",$this->session->user["uid"])[0]["status"] ) {

            switch ($action) {

                // Удаление администратора
                case "delete" :
                    $this->Model_admin->delete($uid);
                        break;

                case "block[action=delete]" :
                   $this->Model_admin->block("delete",$uid);
                        break;

                case "block[action=add]" :
                    $this->Model_admin->block("add",$uid);
                    break;
            }

        } else {

            show_404();

        }
   }
}



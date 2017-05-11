<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("twig");
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Model_user');
        $this->load->database();
    }

    public function index()
    {
        if( isset($this->session->user["uid"]) ) {

            if( $this->Model_user->get($this->session->user["uid"])->status ) {

                echo $this->twig->render("admin.php", array("user" => $this->session->user, "title" => "Админ панель"));

            } else {

                show_404();
            }
        } else {

            show_404();
        }
    }
}
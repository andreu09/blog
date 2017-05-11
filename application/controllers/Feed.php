<?php

class Feed extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("twig");
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        // Если авторизован пользовтаель показываем ему {feed} иначе {welcome}
        if (isset($this->session->user["uid"])) {

            echo $this->twig->render("feed.php", array("user" => $this->session->user, "title" => "Главная"));

        } else {

            echo $this->twig->render("welcome.php", array("title" => "Подтверждение входа", "base_url" => base_url() ) );
        }
    }
}
<?php

class News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("twig");
        $this->load->library('session');
    }

    public function index()
    {
        echo $this->twig->render("news.php", array("user" => $this->session->user, "title" => "Новости"));
    }
}
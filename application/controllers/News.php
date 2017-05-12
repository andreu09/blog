<?php

class News extends CI_Controller

{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("twig");
        $this->load->library('session');
        $this->load->model("Model_news");
        $this->load->model("Model_user");
        $this->load->database();
    }

    public function index()
    {
        echo $this->twig->render("news.php", array("user" => $this->session->user, "title" => "Новости", "news" => $this->get() ));
    }

    /*
     * Добавление новости
    */

    public function add()
    {

       if( $this->input->post('text') !== "" && $this->input->post('type') && $this->input->post('title') !== "" ) {

           if( $this->session->user["status"]) {

                if($this->Model_news->add( $this->input->post('title'), $this->input->post('text'), $this->input->post('type') )) {

                    echo true;

                } else {

                    echo null;
                }

           } else {

               show_404();
           }

       } else {

           show_404();
       }
    }

    /*
     * Получение новостей
     * p - количество записей, если не указан то все
    */

    public function get()
    {
       return  $this->Model_news->get();
    }

}
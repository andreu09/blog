<?php

class News extends CI_Controller

{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_news");
        $this->load->model("Model_user");
        $this->load->database();
    }

    public function index()
    {

        $config['base_url'] = base_url() . "/news/";
        $config['uri_segment'] = 2;
        $config['per_page'] = 3;
        $config["full_tag_open"] = '<div class="ui two column centered grid stackable"> <div class="eight wide column"> <div class="ui borderless menu ">';
        $config["first_tag_close"] = '</p>';
        $config["last_link"] = false;
        $config["cur_tag_open"] = '<a class="active item">';
        $config["cur_tag_close"] = '</a>';
        $config['attributes'] = array('class' => 'item');
        $config['total_rows'] = $this->Model_news->get()["news"]["count"];
        $this->pagination->initialize($config);

        echo $this->twig->render("news.php", [
            "user" => $this->session->user,
            "title" => "Новости",
            "news" => $this->Model_news->get( $this->uri->segment(2) )
        ]);

        echo $this->pagination->create_links();
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


}
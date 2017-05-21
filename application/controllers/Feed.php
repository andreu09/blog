<?php

class Feed extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library("twig");
        $this->load->model("Model_post");
        $this->load->model("Model_user");
    }

    public function index()
    {
        // Если авторизован пользовтаель показываем ему {feed} иначе {welcome}
        if (isset($this->session->user["uid"])) {

            $config['base_url'] = base_url() . "/feed/";
            $config['uri_segment'] = 2;
            $config['per_page'] = 5;
            $config["full_tag_open"] = '<div class="ui two column centered grid stackable"> <div class="eight wide column"> <div class="ui borderless menu ">';
            $config["first_tag_close"] = '</p>';
            $config["last_link"] = false;
            $config["cur_tag_open"] = '<a class="active item">';
            $config["cur_tag_close"] = '</a>';
            $config['attributes'] = array('class' => 'item');
            $config['total_rows'] = $this->Model_post->get()["post"]["count"];
            $this->pagination->initialize($config);

            echo $this->twig->render("feed.php", [
                "base_url" => base_url(),
                "user" => $this->session->user,
                "title" => "Главная",
                "posts" => $this->Model_post->get( $this->uri->segment(2) )
            ]);

            echo $this->pagination->create_links();

        } else {

            echo $this->twig->render("welcome.php", array("title" => "Подтверждение входа", "base_url" => base_url() ) );
        }
    }
}
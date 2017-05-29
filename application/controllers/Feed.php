<?php

class Feed extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("Model_post");
        $this->load->model("Model_user");
    }

    public function index()
    {
        if ( isset($this->session->user["uid"]) ) {

            // url пагинации постов
            $config['base_url'] = base_url() . "/feed/";

            // 2 сегмент отвечает я какого элемента выстаскиваем посты
            $config['uri_segment'] = 2;

            // 5 постов на страницу
            $config['per_page'] = 5;

            // Оболочка блока пагинации
            $config["full_tag_open"] = '
                <div class="ui two column centered grid stackable"> 
                    <div class="eight wide column"> 
                        <div class="ui borderless menu ">
            ';

            // Начало активной ссылки
            $config["cur_tag_open"] = '<a class="active item">';

            // Конец активной ссылки
            $config["cur_tag_close"] = '</a>';

            // Атрибуты ссылки
            $config['attributes'] = array('class' => 'item');

            // Всего постов
            $config['total_rows'] = $this->Model_post->get()["count"];

            // Инициализация пагинации
            $this->pagination->initialize($config);

            echo $this->twig->render("feed.php", [
                "base_url" => base_url(),
                "user" => $this->session->user,
                "title" => "Главная",
                "posts" => $this->Model_post->get( $this->uri->segment(2) )
            ]);

            echo $this->pagination->create_links();

        } else {

            // Если пользователь не авторизован
            echo $this->twig->render("welcome.php", array("title" => "Подтверждение входа", "base_url" => base_url() ) );
        }
    }
}
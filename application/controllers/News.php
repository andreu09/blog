<?php

class News extends CI_Controller

{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("Model_news");
        $this->load->model("Model_user");
    }

    public function index()
    {
        // Базовый url пагинации новостей
        $config['base_url'] = base_url() . "/news/";

        // 2 сегмент является числом от которого считается вывод записей
        $config['uri_segment'] = 2;

        // Не более 3 новостей на страницу
        $config['per_page'] = 3;

        // Оболочка блока пагинации
        $config["full_tag_open"] = '
            <div class="ui two column centered grid stackable">
                <div class="eight wide column">
                    <div class="ui borderless menu">
        ';

        // Начало активной ссылки
        $config["cur_tag_open"] = '<a class="active item">';

        // Конец активной ссылки
        $config["cur_tag_close"] = '</a>';

        // Атрибуты к ссылкам
        $config['attributes'] = array('class' => 'item');

        // Всего новостей
        $config['total_rows'] = $this->Model_news->get()["count"];

        // Инициализируем пагинацию
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

                    // Что-то с базой... не добавилась новость
                    echo null;
                }

           } else {

               // Не администратор
               show_404();
           }

       } else {

           // Не пришел POST запрос
           show_404();
       }
    }


}
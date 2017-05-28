<?php

class Post extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("Model_post");
    }


    /**
     * Добавление
     */

    public function add()
    {
        $this->Model_post->add();
    }

    /**
     * Мне нравиться
     */

    public function like()
    {
        $this->Model_post->like( $this->input->post("post_id"));
    }

    /**
     * Удаление
     */

    public function delete()
    {
        $this->Model_post->delete( $this->input->post("post_id"));
    }
}
<?php

class Post extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("Model_post");
        $this->load->model("Model_user");
    }

    /**
     * Действия с постами
     * @param $action
     * @internal param string $uid
     */

    public function action($action)
    {
        switch ($action) {

            case "add" :
                $this->Model_post->add();
                    break;
        }
    }

    public function like()
    {
        $this->Model_post->like( $this->input->post("post_id"));
    }
}
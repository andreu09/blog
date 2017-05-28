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

    public function delete()
    {
        $this->Model_post->delete( $this->input->post("post_id"));
    }
}
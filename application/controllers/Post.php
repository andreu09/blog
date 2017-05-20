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
     * @param string $uid
     */

    public function action($action,$uid = "")
    {
        switch ($action) {

            case "add" :
                $this->Model_post->add();
                    break;
        }
    }
}
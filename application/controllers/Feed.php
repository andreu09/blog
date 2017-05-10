<?php

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo '<a href="https://oauth.vk.com/authorize?client_id=5240196&display=page&redirect_uri=http://blog.loc/user/vk_auth&response_type=code&v=5.64">Авторизация</a>';
    }
}
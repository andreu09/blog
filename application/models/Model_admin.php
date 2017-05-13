<?php

class Model_admin extends CI_Model
{
    public function get_admin()
    {
        return array("count" => count($this->db->query("SELECT first_name,last_name,uid,photo_200 FROM users WHERE status = 1")->result()) , "admin" => $this->db->query("SELECT first_name,last_name,uid,photo_200 FROM users WHERE status = 1")->result());
    }
}
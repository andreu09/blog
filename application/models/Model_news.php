<?php

class Model_news extends CI_Model
{

    public function add($title,$text,$type)
    {
        $insert = $this->db->insert('news', array(
            "uid"   => $this->session->user["uid"],
            "title" => $title,
            "text"  => $text,
            "type"  => $type
        ) );

       if($insert) {

           return true;

       } else {

           return null;
       }
    }

    public function get()
    {
        $news = $this->db->query("SELECT * FROM news ORDER BY id DESC ")->result();
        $news["count"] = $this->db->count_all("news");
        $user = [];
        for($i = 0; $i <= $this->db->count_all("news") - 1; $i++) {

            $user[] = $this->Model_user->get($news[$i]->uid);

        }

        return array( "news" => $news, "user" => (array) $user );

    }


}
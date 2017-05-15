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

    public function get($total = "")
    {

        // Получаем 3 записи
        $news = $this->db->get("news",3,$total)->result();
        // Сколько получили
        $news["current_count"] = count($news);
        // Всего записей
        $news["count"] = $this->db->count_all("news");
       /* $user = [];
        for($i = 0; $i <= $this->db->count_all("news") - 1; $i++) {

            $user[] = $this->Model_user->get($news[$i]->uid);

        }*/
        return array( "news" => $news ); //"user" => (array) $user

    }


}
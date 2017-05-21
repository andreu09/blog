<?php

class Model_news extends CI_Model
{

    /**
     * Добавление новостей
     * @param $title
     * @param $text
     * @param $type
     * @return bool|null
     */

    public function add($title, $text, $type)
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

    /**
     * Получение новостей
     * @param string $total
     * @return array
     */

    public function get($total = "")
    {

        $this->db->order_by("id", "DESC");
        $news = $this->db->get("news",3,$total)->result();
        // Сколько получили
        $news["current_count"] = count($news);
        // Всего записей
        $news["count"] = $this->db->count_all("news");
        // Массив с данымми о пользователях, которые публиковали новости
        $user = [];
        for($i = 0; $i <=  $news["current_count"] - 1; $i++) {

            $user[] = $this->Model_user->get("user",$news[$i]->uid);
        }

        return array( "news" => $news, "user" => (array) $user );
    }


}
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
        $insert = $this->db->insert('news', [
            "uid"   => $this->session->user["uid"],
            "title" => $title,
            "text"  => $text,
            "type"  => $type,
            "time"  => date("Y-m-d")
        ]);

       if($insert) {

           return true;

       } else {

           // Ошибка базы...
           return null;
       }
    }

    /**
     * Получение новостей
     * @param string $total
     * @return Model_news
     */

    public function get($total = "")
    {
        /** @var Model_news $news */
        $news = [];

        // В обратном порядке
        $this->db->order_by("id", "DESC");

        // Получаем все новости
        $news["item"] = $this->db->get("news",3,$total)->result_array();

        // Текущее количество новостей которые вытащили
        $news["current_count"] = count($news["item"]);

        // Всего новостей
        $news["count"] = $this->db->count_all("news");

        for($i = 0; $i <=  $news["current_count"] - 1; $i++) {

            $news["user"][] = $this->Model_user->get("users",$news["item"][$i]["uid"]);
        }

        return $news;
    }


}
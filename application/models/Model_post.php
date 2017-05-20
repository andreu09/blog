<?php

class Model_post extends CI_Model
{

    /**
     * Получение постов
     * @param $total
     * @param string $uid
     * @return array
     */

    public function get($total = "",$uid = "")
    {

        if($uid === "") {

            // В обратном порядке
            $this->db->order_by("id", "DESC");
            // Получаем все посты
            $posts = $this->db->get("posts",5,$total)->result();
            $posts["current_count"] = count($posts);
            // Всего записей
            $posts["count"] = $this->db->count_all("posts");
            $user = [];
            for($i = 0; $i <=  $posts["current_count"] - 1; $i++) {

                $user[] = $this->Model_user->get("user",$posts[$i]->uid);
            }

           return array( "post" => $posts, "user" => (array) $user );
        }
    }

    /**
     * Добавление постов
     */

    public function add()
    {
        if( $this->input->post("smile") !== "" && $this->input->post("image") ) {

            $image_name = $this->session->user["uid"] . "_" . time() . ".jpg";
            $upload = file_put_contents("assets/images/posts/" . $image_name, base64_decode(explode(",",$this->input->post("image"))[1]));
            $query = $this->db->insert("posts", array("uid" => $this->session->user["uid"], "image" => $image_name, "smile" => $this->input->post("smile")));

            if($upload && $query ) {

                echo  true;

            } else {

                echo false;
            }
        } else {

            echo "Ошибка параметров!";
        }
    }

    /**
     * Удаление постов
     */

    public function delete()
    {

    }
}
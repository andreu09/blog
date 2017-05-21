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

    public function like($post_id)
    {
        $uid_likes = explode(",", $this->db->query("SELECT uid_likes FROM posts")->row()->uid_likes );

        if( in_array($this->session->user["uid"],$uid_likes) )
        {
            // Лайк уже есть
            for($i = 0; $i <= count($uid_likes) - 1; $i++ )
            {
                if( (int) $uid_likes[$i] === $this->session->user["uid"] )
                {
                    // Удаляем элемент пользователя из лайкнувших
                    unset($uid_likes[$i]);
                }
            }

           $delete_like = $this->db->query("  UPDATE posts SET likes = likes - 1");
           $delete_uid_likes = $this->db->update("posts", ["uid_likes" => implode(",",$uid_likes)] );
            // Добавить проверку

        } else {

            // Новый лайк
            $uid_likes = explode(",", $this->db->query("SELECT uid_likes FROM posts")->row()->uid_likes );
            $uid_likes[] = (string) $this->session->user["uid"];
            $add_like = $this->db->query("  UPDATE posts SET likes = likes + 1");
            $add_uid_likes = $this->db->update("posts", ["uid_likes" => implode(",",$uid_likes)] );
            // Добавить проверку

        }

    }
}
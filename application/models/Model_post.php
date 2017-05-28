<?php

class Model_post extends CI_Model
{
    public $upload_dir = "assets/images/posts/";

    /**
     * Получение постов
     * @param $total  - С какого поста начать выборку
     * @param string $uid - Айди пользователя у которого необходимо выбрать посты
     * @return array
     */

    public function get($total = "",$uid = "")
    {
        $posts = [];
        $this->db->order_by("id", "DESC");

        if($uid === "") {

            // Выбираем все посты начиная с {$total}
            $posts["post"] = $this->db->get("posts",5,$total)->result_array();

            // Текущее количество постов на странице
            $posts["current_count"] = count($posts["post"]);

            // Всего опубликованных постов
            $posts["count"] = $this->db->count_all("posts");

            for($i = 0; $i <=  $posts["current_count"] - 1; $i++) {

                $posts["user"][] = $this->Model_user->get("users",$posts["post"][$i]["uid"]);
            }

        } else {

            $posts = $this->db->query("SELECT * FROM posts WHERE uid = '$uid' ")->result_array();

        }

        return $posts;
    }

    /**
     * Добавление постов
     */

    public function add()
    {
        if( $this->input->post("smile") !== "" && $this->input->post("image") ) {

            // Время добавления поста
            $time = date("Y-m-d");

            // Имя загруженного изображения
            $image_name = $this->session->user["uid"] . "_" . time() . ".jpg";

            // Декодированное содержимое изображения
            $decode_image = base64_decode(explode(",",$this->input->post("image"))[1]);

            // Загрузка изображения
            $upload = file_put_contents($this->upload_dir . $image_name, $decode_image);

            // Добавление поста в базу данных
            $query = $this->db->insert("posts", [
                "uid" => $this->session->user["uid"],
                "image" => $image_name,
                "smile" => $this->input->post("smile") ,
                "time" => $time
            ]);

            if($upload && $query) echo  true;

        } else {

            echo "Ошибка параметров!";
        }
    }

    /**
     * Удаление постов
     * @param $post_id
     * @return bool
     */

    public function delete($post_id)
    {
        $status = false;

        // Выбираем все посты у которых id = {$post_id} и uid =  пользователя запросившего удаление
        $user_post = $this->db->query("SELECT id FROM posts WHERE id = $post_id and uid = {$this->session->user["uid"]} ")->row();

        if($user_post !== null)
        {
            if( $this->db->delete('posts', array('id' => $post_id)) ) {

                // Запись удалилась
                $status = true;

            } else {

                // Ошибка удаления записи
                $status = false;
            }

        } else {

            // У пользователя нет такого поста который он хочет удалить
            $status = false;
        }

        echo json_encode([ "status" => $status]);
    }

    /**
     * Лайкаем пост
     * @param $post_id
     */

    public function like($post_id)
    {
        // Массив uid пользователей, который лайкали {$post_id}
        $uid_likes = explode(",", $this->db->query("SELECT uid_likes FROM posts  WHERE id  = '$post_id'")->row()->uid_likes );

        if( in_array($this->session->user["uid"],$uid_likes) )
        {

            for($i = 0; $i <= count($uid_likes) - 1; $i++ )
            {
                if( (int) $uid_likes[$i] === $this->session->user["uid"] )
                {
                    // Удаляем элемент пользователя из лайкнувших
                    unset($uid_likes[$i]);
                }
            }

            // Вычитаем один лайк
            $delete_like = $this->db->query(" UPDATE posts SET likes = likes - 1 WHERE id  = '$post_id' ");

            // Выбтраем где айди поста равно запрошенному {$post_id}
            $this->db->where('id', $post_id);

            // Обновляем данные uid лайкнувших
            $delete_uid_likes = $this->db->update("posts", ["uid_likes" => implode(",",$uid_likes)] );

        } else {

            // Добавляем в массив с лайками выбранной записи нового лайкнувшего пользователя
            $uid_likes[] = (string) $this->session->user["uid"];

            // Плюсуем один лайк
            $add_like = $this->db->query("  UPDATE posts SET likes = likes + 1  WHERE id  = '$post_id'");
            $this->db->where('id', $post_id);
            $add_uid_likes = $this->db->update("posts", ["uid_likes" => implode(",",$uid_likes)] );

        }

        // Количество всех лайков поста, который лайкали
        $likes = $this->db->query(" SELECT likes FROM posts  WHERE id  = '$post_id'")->row()->likes;

        // Проверим добавляли или убирали лайк
        in_array($this->session->user["uid"],$uid_likes) ? $action = "add" : $action = "delete";

        echo json_encode([ "post_id" =>$post_id, "likes" => $likes, "action" => $action ]);

    }
}
<?php

class Model_user extends CI_Model
{
    /**
     * Авторизация ВК
     * @param $user
     * @return bool|null
     */

    public function vk_auth($user) {

        // Выбираем [uid] and [block] пользователя {$user}
        $query = $this->db->query("SELECT uid,block FROM users WHERE uid = $user->id")->row();

        // id вконтакте это и есть наш uid пользователя
        $user->uid = $user->id;

        // Удаляем id ибо он нам больше не нужен
        unset($user->id);

        if($query !== null) {

            // Выбираем uid пользователя
            $this->db->where('uid', $user->id);

            // Обновляем его данные
            $update = $this->db->update('users', $user);

            if($update) {

                if($query->block) {

                    // Пользователь блокирован
                    return false;

                } else {

                    // Не блокирован
                    return true;
                }

            } else {

                // Ошибка добавления, что то с базой не так...
                return null;
            }

        } else {

            // Пользователь новый, заносим все его данные
            $insert = $this->db->insert('users', $user);

            if($insert) {

                // Добавили пользователя
                return true;

            } else {

                // Ошибка добавления нового пользователя, что то не так с базой...
                return null;
            }
        }
    }

    /**
     * Получение информации о пользователе через uid
     * @param $uid
     * @param $action
     * @return null
     */

    public function get($action,$uid = "")
    {
        /** @var Model_user $result */
        $result = [];

        /** @var Model_user $where */
        $where_uid = [ "uid" => $uid ];

        /** @var Model_user $where_block */
        $where_block = [ "block" => true ];

        switch ($action) {

            case "user" :

                // Информации об одном пользователе по [uid]
                $result = $this->db->get_where('users', $where_uid )->row();
                    break;

            case "users" :

                // Информация об нескольких пользователях по uid
                $result = $this->db->get_where('users', $where_uid )->result_array()[0];
                    break;

            case "block" :

                // Информация о пользователях, которые заблокированы
                $result = $this->db->get_where('users', $where_block )->result_array()[0];
                    break;
        }

        return $result !== null ? $result : null;
    }

}
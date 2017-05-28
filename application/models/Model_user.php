<?php

class Model_user extends CI_Model
{
    /**
     * Авторизация ВК
     * @param $user
     * @return bool|null
     */

    public function vk_auth($user ) {

        $query = $this->db->query("SELECT uid,block FROM users WHERE uid = $user->id")->row();
        $user->uid = $user->id;

        if($query !== null) {

            // Выбираем uid пользователя
            $this->db->where('uid', $user->id);
            // Удаляем id ибо оно все равно не меняется
            unset($user->id);
            // Обновляем его данные
            $update = $this->db->update('users', $user);

            // Проверяем прошел ли процесс обновления данных пользователя
            if($update) {

                // Проверка на блокировку пользователя
                if($query->block) {

                    // Пользователь блокирован
                    return false;

                } else {

                    // Не блокирован
                    return true;
                }

            } else {

                // Ошибка добавления
                return null;
            }
        // Новый пользователь
        } else {

            // Удаляем id ибо оно все равно не меняется
            unset($user->id);
            $insert = $this->db->insert('users', $user);

            if($insert) {

                // Добавили пользователя
                return true;

            } else {

                // Ошибка добавления пользователя
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

        switch ($action) {

            case "user" :
                $where = [ "uid" => $uid ];
                $result = $this->db->get_where('users', $where )->row();
                    break;

            case "users" :
                $where = [ "uid" => $uid ];
                $result = $this->db->get_where('users', $where )->result_array()[0];
               // $query->count = count($query);
                    break;

            case "block" :
                $where = [ "block" => true];
                $result = $this->db->get_where('users', $where )->result();
                    break;
        }

        if($result !== null) {

            // Массив с данными пользователя
            return $result;

        } else {

            // Пользователь не найден
            return null;
        }
    }

}
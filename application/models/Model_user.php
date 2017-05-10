<?php

class Model_user extends CI_Model
{
    public function vk_auth( $user ) {

        $query = $this->db->query("SELECT uid FROM users WHERE uid = $user->id")->row();
        $user->uid = $user->id;

        if($query !== null) {

            // Выбираем uid пользователя
            $this->db->where('uid', $user->id);
            // Удаляем id ибо оно все равно не меняется
            unset($user->id);
            // Обновляем его данные
            $update = $this->db->update('users', $user);

            if($update) {

                // Обновились данные
                return true;

            } else {

                // Не обновилисьс данные
                return null;
            }

        } else {

            // Удаляем id ибо оно все равно не меняется
            unset($user->id);
            // Новый пользователь
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
}
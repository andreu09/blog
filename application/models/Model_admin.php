<?php

class Model_admin extends CI_Model
{
    /**
     * Получение информации об администраторах
     * @return array
     */

    public function get()
    {
        // Все сведения об администраторах
        $admins["user"] = $this->db->query("SELECT first_name,last_name,uid,photo_200 FROM users WHERE status = 1")->result_array();
        // Количетсво администраторов
        $admins["count"] = count($admins["user"]);
        return $admins;
    }

    /**
     * Удаление администратора по uid
     * @param $uid
     * @return null
     */

    public function delete($uid)
    {
        $query = $this->db->update("users", array( "status" => 0 ), "uid = $uid");

        if($query) {

            echo "Успешно! Пользователь $uid снят с должности администратора.";

        } else {

            return null;
        }
    }

    /**
     * Блокировка или Разблокировка пользователя
     * @param $action
     * @param $uid
     * @return null
     */

    public function block($action, $uid)
    {

        switch ($action) {

            case "delete" :
                $block = 0;
                    break;

            case "add" :
                $block = 1;
                    break;
        }

        $query = $this->db->update("users", array( "block" => $block ), "uid = $uid");

        if($query && $block) {

            echo "Успешно! Пользователь $uid был заблокирован.";

        } elseif($query && !$block) {

            echo "Успешно! Пользователь $uid был снят с блокировки.";

        } else {

            return null;
        }
    }
}
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
        var_dump( $admins);
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

            echo "Успешно! Пользователь $uid снят с должности администратора";

        } else {

            return null;
        }
    }
}
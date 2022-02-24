<?php


class User
{

    public static function register() {

    }

    /**
     * Имя не меньше чем 2 символа
     */
    public static function checkName($name) {
        if (strlen($name) >= 2) {
            return true;
        }
    }

    /**
     * @param $password
     * @return bool
     */
    public static function checkPassword($password) {
        if (strlen($password) >= 6) {
            return true;
        }
    }

    /**
     * @param $email
     * @return bool
     */
    public static function checkEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

}
<?php


class UserController
{

    public function actionRegister() {

        $name = '';
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (User::checkName($name)) {
                echo '<br>$name ok!';
            }else{
                $errors[] = 'Имя не ложно быть меньше 2 -х символов';
            }
            if (User::checkEmail($email)){
                echo '<br> $email ok!';
            }else{
                $errors[] = 'Неправильный email';
            }

            if (User::checkPassword($password)) {
                echo '<br> $password ok!';
            }else{
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if ($errors == false) {
                //save user
            }

        }

        require_once(ROOT . '/views/user/register.php');


        return true;

    }
}
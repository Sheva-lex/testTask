<?php
/**
 * Created by PhpStorm.
 * User: vitalik
 * Date: 25.06.17
 * Time: 0:25
 */
include_once ROOT. '/models/User.php';

class UserController
{

    public function actionRegister()
    {
        $name = '';
        $surname = '';
        $login = '';
        $password = '';
        $email = '';
        $gender = '';
        $age = '';
        $studentgroup = '';
        $faculty ='';
        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $studentgroup = $_POST['studentgroup'];
            $faculty = $_POST['faculty'];


            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Ім\'я не повенно бути меншим 2-х символів';
            }

            if (!User::checkSurname($surname)) {
                $errors[] = 'Фамілія не повенна бути меншою 2-х символів';
            }

            if (!User::checkLogin($login)) {
                $errors[] = 'Логін не повенен бути меншим 2-х символів';
            }
            
            if (!User::checkPassword($password)) { 
            $errors[] = 'Пароль не повинен бути меншим 6-ти символів';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильний email';
            }

            if (User::checkEmailExists($email)) {
                $errors[] = 'Такий емейл вже використовується';
            }

            if ($errors == false) {
                $result = User::register($name, $surname, $login, $password, $email, $gender, $age, $studentgroup, $faculty);
                echo $result;
            }

        }


        require_once(ROOT . '/views/register.php');

        return true;
    }

}
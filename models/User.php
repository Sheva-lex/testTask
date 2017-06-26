<?php

class User
{
    public static function register($name, $surname, $login, $password, $email, $gender, $age, $studentgroup, $faculty) {
        
        $db = Db::getConnection();
        
        $sql = 'INSERT INTO students (name, surname, login, password, email, gender, age, studentgroup, faculty)'
                . 'VALUES (:name, :surname, :login, :password, :email, :gender, :age, :studentgroup, :faculty)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':surname', $surname, PDO::PARAM_STR);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':gender', $gender, PDO::PARAM_STR);
        $result->bindParam(':age', $age, PDO::PARAM_INT);
        $result->bindParam(':studentgroup', $studentgroup, PDO::PARAM_STR);
        $result->bindParam(':faculty', $faculty, PDO::PARAM_STR);

        return $result->execute();
    }
    
    /**
     * Перевіряє ім'я: не менше, ніж 2 символи
     */
    public static function checkName($name) {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    /**
     * Перевіряє фамілію: не менше, ніж 2 символи
     */
    public static function checkSurname($surname) {
        if (strlen($surname) >= 2) {
            return true;
        }
        return false;
    }

    /**
     * Перевіряє логін: не менше, ніж 2 символи
     */
    public static function checkLogin($login) {
        if (strlen($login) >= 2) {
            return true;
        }
        return false;
    }

    /**
     * Перевіряє пароль: не менше, ніж 6 символів
     */
    public static function checkPassword($password) {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    /**
     * Перевіряє емейл
     */
    public static function checkEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function checkEmailExists($email) {

        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn())
            return true;
        return false;
    }
    
}
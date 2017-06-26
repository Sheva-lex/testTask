<?php
/**
 * Created by PhpStorm.
 * User: vitalik
 * Date: 22.06.17
 * Time: 13:58
 */

class Students
{
    /**
     * Returns student  with specified id
     * @param integer $id
     */
    public static function getStudentItemById($id)
    {
        // Запрос до БД
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM students WHERE id='.$id);

            $result->setFetchMode(PDO::FETCH_ASSOC); // або FETCH_NUM

            $studentsItem = $result->fetch();

            return $studentsItem;
        }
    }
    /**
     * Returns an array of students
     */
    public static function getStudentsList()
    {

        // Запрос до БД
        $db = Db::getConnection();

        $studentsList = array();

        $result = $db->query('SELECT id, name, surname '
                . 'FROM students '
        );

        $i = 0;
        while ($row = $result->fetch()) {
            $studentsList[$i]['id'] = $row['id'];
            $studentsList[$i]['name'] = $row['name'];
            $studentsList[$i]['surname'] = $row['surname'];
            $i++;
        }

        return $studentsList;
    }
}
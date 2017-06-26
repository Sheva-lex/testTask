<?php
/**
 * Created by PhpStorm.
 * User: vitalik
 * Date: 22.06.17
 * Time: 13:55
 */

include_once ROOT. '/models/Students.php';

class StudentsController
{

    public function actionIndex() // Список студентів
    {
        $studentsList = array();
        $studentsList = Students::getStudentsList();

        require_once (ROOT.'/views/index.php');

        return true;
    }

    public function actionView($id) //Перегляд інформації про окремого студента
    {
        if ($id) {
            $studentItem = Students::getStudentItemById($id);

            require_once (ROOT.'/views/views.php');
        }

        return true;
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: vitalik
 * Date: 22.06.17
 * Time: 14:50
 */

return array(
    'students/([0-9]+)'=>'students/view/$1', //ActionView в StudentsController
    'students'=>'students/index', // ActionIndex в StudentsController
    ''=>'students/index',
    'user/register' => 'user/register' // ActionRegister в UserController

);

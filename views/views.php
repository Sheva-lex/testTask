<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title><?php echo $studentItem['name'].' '.$studentItem['surname'];?></title>
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="../template/CSS/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="menu-wrapper">
    <div id="menu">
        <ul>
            <li><a href="/user/register">Реєстрація</a></li>
        </ul>
    </div>
    <!-- end #menu -->
</div>

<div id="wrapper">
    <div id="header-wrapper">
        <div id="header">
            <div id="logo">
                <h1><?php echo $studentItem['name'].' '.$studentItem['surname'];?></h1>
            </div>
        </div>
    </div>
    <!-- end #header -->
    <div id="page">
        <div id="page-bgtop">
            <div id="page-bgbtm">
                <div id="content">
                    <div class="post">
                        <h2 class="title"><a href='/st/<?php echo $studentItem['id'] ;?>'><?php echo $studentItem['name'].' '.$studentItem['surname'];?></a></h2>

                            <p>Вік: <?php echo $studentItem['age'];?></p>
                            <p>Стать: <?php echo $studentItem['gender'];?></p>
                            <p>Група: <?php echo $studentItem['studentgroup'];?></p>
                            <p>Факульет: <?php echo $studentItem['faculty'];?></p>
                            <p>Емейл: <?php echo $studentItem['email'];?></p>
                        </div>
                    </div>
                    <p><a href='/students/' class="permalink">Повернутись до списку студентів</a></p>
                    <div style="clear: both;">&nbsp;</div>
                </div>
                <!-- end #content -->

                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
    </div>
    <!-- end #page -->
</div>
<div id="footer">
    <p>Copyright (c) 2016 Test</p>
</div>
<!-- end #footer -->
</body>
</html>
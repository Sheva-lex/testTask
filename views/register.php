<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Студенти СНУ ім. Лесі Українки</title>
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="../template/CSS/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="menu-wrapper">
    <div id="menu">
    </div>
    <!-- end #menu -->
</div>

<div id="wrapper">
    <div id="header-wrapper">
        <div id="header">
            <div id="logo">
                <h1>Реєстрація</h1>
            </div>
        </div>
    </div>
    <!-- end #header -->
    <div id="page">
        <div id="page-bgtop">
            <div id="page-bgbtm">
                <div id="content">
                    <section>
                        <div class="container">
                            <div class="row">

                                <div class="col-sm-4 col-sm-offset-4 padding-right">

                                    <?php if ($result): ?>
                                        <p>Вітаємо ви успішно зареєструвались!</p>
                                    <?php else: ?>
                                        <?php if (isset($errors) && is_array($errors)): ?>
                                            <ul>
                                                <?php foreach ($errors as $error): ?>
                                                    <li> - <?php echo $error; ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>

                                        <div class="signup-form"><!--sign up form-->
                                            <form action="#" method="post">
                                                <label>Ім'я: </label>
                                                <input type="text" name="name"  value="<?php echo $name; ?>"/></br>
                                                <label>Фамілія: </label>
                                                <input type="text" name="surname"  value="<?php echo $surname; ?>"/></br>
                                                <label>Логін: </label>
                                                <input type="text" name="login"  value="<?php echo $login; ?>"/></br>
                                                <label>Пароль: </label>
                                                <input type="password" name="password"  value="<?php echo $password; ?>"/></br>
                                                <label>E-mail: </label>
                                                <input type="email" name="email"  value="<?php echo $email; ?>"/></br>
                                                <label>Стать: </label>
                                                <input type="text" name="gender"  value="<?php echo $gender; ?>"/></br>
                                                <label>Вік: </label>
                                                <input type="text" name="age"  value="<?php echo $age; ?>"/></br>
                                                <label>Група: </label>
                                                <input type="text" name="studentgroup"  value="<?php echo $studentgroup; ?>"/></br>
                                                <label>Факультет: </label>
                                                <input type="text" name="faculty"  value="<?php echo $faculty; ?>"/></br>
                                                <input type="submit" name="submit" class="btn btn-default" value="Реєстрація" />
                                            </form>
                                        </div><!--/sign up form-->

                                    <?php endif; ?>
                                    <br/>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </section><p><a href='/students/' class="permalink">Повернутись до списку студентів</a></p>
                    <div style="clear: both;">&nbsp;</div>
                </div>
                <!-- end #content -->

                <div style="clear: both;">&nbsp;</div>
                </div>
                <!-- end #content -->

                <!-- end #sidebar -->
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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Meme Page Prototype</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="navigationbar.css" />
</head>
<body>
    <div id="navbar">
        <ul>
            <li><a href="">test</a></li>
            <li><a href="">home</a></li>
            <li><a href="">login</a></li>
        </ul>
    </div>
    <?php
        require 'user.php';
        $user = new User();
        $user->userName = 'boi';
        $user->login = 'geheim';
        var_dump($user);
        ?>
</body>
</html>
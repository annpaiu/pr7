<?php
   // code with validation will be here and saving user will be here
   include 'uploads.php'
?>
<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <style>
            .container {
                width: 400px;
            }
        </style>
    </head>
    <body style="padding-top: 3rem;">

    <div class="container">
        User Added: <?php echo $_POST["name"]; ?><br>
        <?php $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS); ?>
        Email: <?php echo $_POST["email"]; ?><br>
        <?php $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS); ?>
        Gender: <?php echo $_POST["gender"]; ?><br>
        <?php $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_FULL_SPECIAL_CHARS); ?>
        Photo: <?php echo $filePath; ?><br>
        <?php

        if (!file_exists('database/users.csv')) {
            file_put_contents('database/users.csv', '');
        }
        $fp = fopen('database/users.csv', 'a');
        fwrite($fp, "$name,$email,$gender,$filePath \n");
        fclose($fp);
        ?>
        <hr>
        <a class="btn" href="adduser.php">return back</a>
        <a class="btn" href="table.php">view list</a>
    </div>
    </body>
    </html>
<?php
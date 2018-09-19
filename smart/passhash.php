<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="pass" id="pass">
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
if($_POST){
echo password_hash( $_POST['pass'] , PASSWORD_DEFAULT, ['cost' => 12]);
echo "<script> alert(\"password hash has been created\"); </script>";
}

?>
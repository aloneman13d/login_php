<?php session_start(); ?>


<?php if(isset($_SESSION['sess_id'])&&isset($_SESSION['username'])):?>
<?php echo $_SESSION['username']?>---||---<a href="logout.php">Logout</a><br><br>

<?php else: header('refresh:0;login.php');?>
<?php endif;?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    หน้าติดต่อ
    เบอรโทร
    line

</body>
</html>
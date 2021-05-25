<?php session_start(); ?>

<?php if(isset($_POST['userid'])): ?>
<?php $_SESSION['sess_id'] = session_id(); ?>
<?php $_SESSION['username'] = $_POST['userid']  ;     //select from database  ?>
<?php header('refresh:0;index.php');?>
<?php else: header('refresh:0;form_login.php'); ?>
<?php endif; ?>



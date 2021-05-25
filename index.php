<?php session_start(); // Add  Top file ?>

<?php if(isset($_SESSION['sess_id'])&&isset($_SESSION['username'])):?>
<?php echo $_SESSION['username']?>---||---<a href="logout.php">Logout</a><br><br>
<?php echo 'หน้า index.php';?>
<?php else: header('refresh:0;login.php');?>
<?php endif;?>

<?php session_start(); ?>
<?php require_once("pdo_connect.php"); ?>
<?php
    $sql = "SELECT * FROM users WHERE name=:name ";
    $statement = $conn->prepare($sql) ;
    $statement->bindParam(":name",$name);

    $name  = $_POST['userid'];
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    $hash_pass = $result[0]['password'];
    if(password_verify($_POST['pass'],$hash_pass)){
        $_SESSION['sess_id'] = session_id();
        $_SESSION['username'] = $result[0]['name'];
        header('refresh:0;index.php');
    }else{
        header('refresh:0;form_login.php'); 
    }
?>



<?php
    // TEST User
    // 1. username "nunta" and password "1234"
    // 1. username "prom" and password "4321"

?>

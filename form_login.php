<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<div class="container">
    <div class="row">
        <div class="col">
        <form class="row g-3 needs-validation" method="post" action="login.php" novalidate>
    <div class="col-12">
        <label for="validationCustom01" class="form-label">Username</label>
        <input type="text" class="form-control" id="validationCustom01" name="userid" required>
        <div class="invalid-feedback">
        กรุณากรอก Username
        </div>
    </div>
    <div class="col-12">
        <label for="validationCustom02" class="form-label">Password</label>
        <input type="password" class="form-control" id="validationCustom02" name="pass" required>
        <div class="invalid-feedback">
        กรุณากรอก Password
        </div>
    </div>
    
    
    
   
    
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Login</button>
    </div>
    </form>
        </div>
    </div>
</div>
<script src="js/script.js"></script>
</body>
</html>
<?php

if(isset($_POST['submit'])){

  if($_POST['email'] === "admin" && $_POST['password'] === "password"){
    session_start();

    

    $parent = dirname($_SERVER['REQUEST_URI']);

    header('location:index.php');

  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Session Index page</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/main.css">
  <main>
<form method="post" action="../index.php">
<div id="wrapper">
<form action="routes.php" method="post">
    </div>
    <div class="form-group">
      <label for="username">Email </label>
      <input type="text" class="form-control" id="email" name="email" value="sshaper@Admin.com" >
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="text" class="form-control" id="password" name="password" value="password123" >
    </div>
    <input type="submit" name="submit" value = "Login" class="btn btn-primary">





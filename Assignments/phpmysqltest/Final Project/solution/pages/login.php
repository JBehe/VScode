<?php

if(isset($_POST['submit'])){

}

$form = <<<HTML
<form method="post" action="index.php?page=login.php">

    <div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="form-group">
      <label for="email">Email </label>
      <input type="text" class="form-control" id="email" name="email" >
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="text" class="form-control" id="password" name="password" value="" >
    </div>



HTML;
?>
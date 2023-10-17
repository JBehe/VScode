<!doctype html>
<html lang="en">

<?php
$output;

if(count($_POST) > 0){
    require_once 'nameAdder.php';
    $addName = new AddNames();
    $output = $addName->addClearName();
   }
?>



<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
 <body>
    <div class = "container">
    <form method ="post">

     <label for="fname" class="form-label" style= "font-size: 50px"> Add Names </label>
     <br>
     <button class ="btn btn-primary" name="AddName"> Add Names </button>
     <button class ="btn btn-primary" name="ClearName"> Clear Names </button>
     <br>
     <label for="nEntry" class="form-label" > Enter Name </label>
     <br>
     <input type="text"  name= "nameEntry" class="form-control" id="name Entry">
     <br>
     <label for="nEntry" class="form-label" > List of Names </label>
     <br>
     <textarea style="height: 500px;" class="form-control" id="namelist" name="namelist"><?php echo $output ?></textarea>
     
    


    </form>
    </div>

</body>
</html>
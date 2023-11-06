<?php
require_once 'classes/fileProc.php';
$fileProc = new FileProc();
$arr = $fileProc->init();
?>

<html>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
 <body>
    <div class = "container">
    <form action="index.php" method="post" enctype="multipart/form-data">

     <label for="fname" class="form-label" style= "font-size: 50px"> File Display and Upload </label>
     <br>
     <label for="fname" class="form-label" > Upload File </label>
     <br>
     <label for="nEntry" class="form-label" > <?php echo $arr[0]; ?> </label>
     <br>
     <input type="text"  name= "FileName"  class="form-control" >
     <br>
     <label for="nEntry" class="form-label" > Choose File </label>
     <br>
     <input type="file" id="fileSelection"  name="File Content"></input>
     <br><br>
     <button class ="btn btn-primary" name="submit"> Choose File </button>
     <br>
     <label for="fname" class="form-label" style= "font-size: 50px"> Display File List </label>
     <br>
     <label for="fileList" class="form-label" >  <? echo $arr[1] ?> </label>
    


    </form>
    </div>

</body>
</html>




</html>
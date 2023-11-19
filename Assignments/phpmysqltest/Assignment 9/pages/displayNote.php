<?php
require_once'../php/addDisplayNotes.php';
//$dt = new Date_time();
//$notes = $dt->checkSubmit();
?>

<html>
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class = "container">
    <form action = "displayNote.php" method="post" enctype="multipart/form-data">
        
    <h1>Display Notes</h1>

    <p><a href = "addNote.php"> Add Notes</a> </p>

    <p> <label for = "firstDate" class = "form-label"> Beginning date </label></p>
    <input id="firstDate" type="datetime-local" name="date1" width="501px"/><br><br>
    
    <p> <label for = "secondDate" class = "form-label"> Ending Date </label></p>
    <input id="secondDate" type="datetime-local" name="date2" width="501px"/><br><br>

    <button class ="btn btn-primary" name="getNote"> get Note </button>

</html>



</html>
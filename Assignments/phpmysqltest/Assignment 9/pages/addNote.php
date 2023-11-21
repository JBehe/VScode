<?php
require_once'../classes/addDisplayNotes.php';
$dt = new addDisplayNotes();
$notes = $dt->checkSubmit();
?>

<html>

<head>
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class = "container">
    <form action = "addNote.php" method="post" enctype="multipart/form-data">
        
    <h1>Add Notes</h1>

    <p><a href = "displayNote.php"> Display Notes </a> </p>

    <p><div><?php echo $notes; ?></div></p>
    
    <p> <label for = "dateEntry" class = "form-label"> Date and Time </label></p>
    <input id="dateEntry" type="datetime-local" name="dateEntry" width="501px"/><br><br>
    
    <p> <label for = "noteEntry" class = "form-label"> Note </label> </p>
    
    <input id = "noteEntry" type = "text" name = "noteEntry" style="height: 500px;" class = "form-control" > </input><br><br>
    <button id = addNote class ="btn btn-primary" name="addNote"> Add Note </button>





</html>
<?php
require_once'../classes/addDisplayNotes.php';
$dt = new addDisplayNotes();
$notes = $dt->checkSubmit();
?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class = "container">
    <form action = "displayNote.php" method="post" enctype="multipart/form-data">
        
    <h1>Display Notes</h1>

    <p><a href = "addNote.php"> Add Notes</a> </p>

    <p> <label for = "firstDate" class = "form-label"> Beginning date </label></p>
    <input id="firstDate" type="date" name="firstDate" /><br><br>
    
    <p> <label for = "secondDate" class = "form-label"> Ending Date </label></p>
    <input id="secondDate" type="date" name="secondDate" /><br><br>

    <button id = getNote class ="btn btn-primary" name="getNote"> get Note </button>
    <p><div><?php echo $notes ?></div></p> 
    <!-- notes should be running to check if the get note button was pushed no complete error catch system is implemented
    but should still return the default statement of "no notes within the given time frame"-->

</html>



</html>

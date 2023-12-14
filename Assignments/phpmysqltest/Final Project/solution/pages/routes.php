<?php

$path = "index.php?page=welcome";


$nav=<<<HTML
    <nav>
    <ul style="list-style-type: none; margin: 0; padding: 0; overflow: hidden;">
        <li style="float: left; margin-right: 20px;"><a href="index.php?page=addContact">Add Contact</a></li>
        <li style="float: left; margin-right: 20px;"><a href="index.php?page=deleteContacts">Delete contact(s)</a></li>
        <li style="float: left; margin-right: 20px;"><a href="index.php?page=addAdmin">Add admin</a></li>
        <li style="float: left; margin-right: 20px;"><a href="index.php?page=deleteAdmins">Delete admin(s)</a></li>
        <li style="float: left;"><a href="logout.php">logout</a></li>
    </ul>
</nav>
HTML;

if(isset($_GET)){
    if($_GET['page'] === "addContact"){
        require_once('pages/addContact.php');
        $result = init();
    }
    
    else if($_GET['page'] === "deleteContacts"){
        require_once('pages/deleteContacts.php');
        $result = init();
    }

    else if($_GET['page'] === "welcome"){
        require_once('pages/welcome.php');
        $result = init();

    }
    else if($_GET['page'] === "addAdmin"){
        require_once('pages/addAdmin.php');
        $result = init();
    }
    else if($_GET['page'] === "deleteAdmins"){
        require_once('pages/deleteAdmins.php');
        $result = init();
    }
    else if($_GET['page'] === ""){
        require_once('logout.php');
        $result = init();
    }
    

    else {
        header('location: '.$path);
    }
}

else {
    header('location: '.$path);
}



?>
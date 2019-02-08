<?php
    include("header.php");
    if(empty($_SESSION['user'])) {
        header('Location: index.php');exit;
    }  
?>

<p>Admin</p>

<div class="adminLogOut">    
            <a href="./index.php?deconnexion=true" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-log-out"></span> Log out</a>
</div>
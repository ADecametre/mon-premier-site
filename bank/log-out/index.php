<?php
session_start();

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();

?>
<title>Déconnexion | ADam Bank</title>
<script>
    alert("Déconnexion faite avec succès");
</script>
<meta http-equiv="refresh" content="1;URL=/bank">
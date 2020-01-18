<?php
session_start();
session_unset();
session_destroy();
?>

<script>
    alert("Déconnexion faite avec succès");
</script>
<meta http-equiv="refresh" content="0;URL=/beta">
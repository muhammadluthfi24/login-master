<?php
session_start();
if (isset($_SESSION['id'])){
    session_start();
    session_unset();
    session_destroy();
    header("Location: index.php");
}

else {
    echo "<script>
    alert('Silakan login terlebih dahulu')
    location.replace(login.php)
    </script>" ;
} 
?>
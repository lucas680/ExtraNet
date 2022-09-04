<?php
session_start();
if(isset($_POST['deslogar'])){
    session_destroy();
    header('location: ../');
}
?>
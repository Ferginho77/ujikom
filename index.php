<?php
session_start();
if($_GET['page'] == 'home'){
    echo "ini home";
} elseif($_GET['page'] == 'about') {
    echo "ini about";
}

?>
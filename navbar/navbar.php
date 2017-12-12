<?php
     if ($_SESSION['tipe'] == "murid"){
        include 'navbar/murid-navbar.html';
     } else {
        include 'navbar/tutor-navbar.html';
     }
?>
<?php 
    session_start(); 

    /**
     * logoutUser()
     * Ha van beállítva user a munkamenetváltozókban,
     * akkor kitörli a session-t és megszünteti azt.
     */
    function logoutUser(){
        if(isset($_SESSION["user"])){
            session_unset();
            session_destroy();
        }
    }
?>
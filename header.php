<?php 
    /**
     * Session elindítása vagy betöltése.
     */
    session_start(); 

    echo "<!DOCTYPE html>";
    echo "<html lang='hu'> 
    <head>\n";
    /**
     * Logout
     * Ha post metódussal logout értéket kap,
     * akkor kitörli a session-t és megszünteti azt.
     */
    if(isset($_POST["logout"])){
        session_unset();
        session_destroy();
        echo "<script>alert('Sikeres kijelentkezés!');</script>
        ";
    }
?>
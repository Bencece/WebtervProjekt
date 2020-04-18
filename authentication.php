<?php
    //registerUser("Teszt","teszt");
    loginUser("Teszt", "teszt");
    /**
     * registerUser(username, password)
     * Két paramétert vár, egy felhasználónevet és egy jelszót.
     * Ha van már felhasználó ilyen névvel hibát dob, ha nincs 
     * hash-eli a jelszót és betszi az adatbázisba.
     */
    function registerUser($username, $password){
        if($username != "" && $password != ""){
            $db = fopen("db.txt", "r");
            while (($line = fgets($db)) !== false){
                $account = unserialize($line);
                if($account["username"] == $username){
                    return "Kérlek válassz másik felhasználónevet!";
                }
            }
            fclose($db);
            $db = fopen("db.txt", "a");
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            fwrite($db, serialize(["username" => "$username", "password" => "$hashed"]) . "\n");
            fclose($db);
            return "Sikeres regisztráció!";
        }
        return "Hiba a regisztráció során!";
    }
    /**
     * loginUser(username, password)
     * Két paramétert vár, egy felhasználónevet és egy jelszót.
     * Ha nincs ilyen névvel felhasználó, vagy a jelszó nem megfelelő,
     * hibát dob. Ha mind két adat megfelelő a felhasználót bejelentkezteti.
     */
    function loginUser($username, $password){
        if($username != "" && $password != ""){
            $db = fopen("db.txt", "r");
            while (($line = fgets($db)) !== false){
                $account = unserialize($line);
                if($account["username"] == $username){
                    if(password_verify($password, $account["password"])){
                        $_SESSION["user"] = $username;
                        return "Sikeres bejelentkezés!";
                    } else return "A jelszó nem megfelelő!";
                } else return "A felhasználónév nem megfelelő!";
            }
            return "Hiba a bejelentkezés során! (1)";
        }
        return "Hiba a bejelentkezés során! (0)";
    }
?>
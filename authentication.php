<?php
    /**
     * registerUser(username, password, password2, email, date)
     * 
     * Öt paramétert vár, egy e-mail címet, egy felhasználónevet, egy jelszót, a jelszót mégegyszer,
     * és opcionális paraméterként egy dátumot.
     * Ha van már felhasználó ilyen névvel, vagy nem megfelelő hosszú a jelszó,
     * vagy nem egyezik a két jelszó hibát dob, ha nincs hiba
     * hash-eli a jelszót és betszi az adatbázisba.
     * 
     * Visszatérési érték egy üzenet, a hibáról vagy a sikeres regisztrációról.
     */
    function registerUser($email, $username, $password, $password2, $date = null){
        if($username != "" && $password != "" && $email != ""){
            $db = fopen("db.txt", "r");
            while (($line = fgets($db)) !== false){
                $account = unserialize($line);
                if($account["username"] === $username){
                    return "A felhasználónév már foglalt!";
                }
            }
            if (strlen($password) < 5 ){
                return "A jelszó túl rövid! Legalább 5 karakter hosszú legyen!";
            }
            if ( !preg_match("/[A-Za-z]/", $password) || !preg_match("/[0-9]/", $password)){
                return "A jelszónak tartalmaznia kell legalább egy betűt és számot is!";
            }
            if ( $password !== $password2){
                return "A jelszavak nem egyeznek!";
            }   
            fclose($db);
            $db = fopen("db.txt", "a");
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            fwrite($db, serialize(["username" => "$username", "password" => "$hashed", "email" => "$email", "date" => "$date"]) . "\n");
            fclose($db);
            return "Sikeres regisztráció!";
        }
        return "Hiba a regisztráció során!";
    }
    /**
     * loginUser(username, password)
     * 
     * Két paramétert vár, egy felhasználónevet és egy jelszót.
     * Ha nincs ilyen névvel felhasználó, vagy a jelszó nem megfelelő,
     * hibát dob. Ha mind két adat megfelelő a felhasználót bejelentkezteti.
     * 
     * Visszatérési érték egy üzenet, a hibáról vagy a sikeres bejelentkezésről.
     */
    function loginUser($username, $password){
        if($username != "" && $password != ""){
            $db = fopen("db.txt", "r");
            while (($line = fgets($db)) !== false){
                $account = unserialize($line);
                if($account["username"] == $username){
                    if(password_verify($password, $account["password"])){
                        $_SESSION["user"] = $username;
                        $_SESSION["cart"] = [];
                        return "Sikeres bejelentkezés!";
                    } else return "Helytelen felhasználónév vagy jelszó!";
                }
            }
            return "Hiba a bejelentkezés során! (1)";
        }
        return "Hiba a bejelentkezés során! (0)";
    }
?>
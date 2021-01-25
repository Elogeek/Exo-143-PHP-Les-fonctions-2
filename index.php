<?php
//exo1
function boolTrue($bool) {
    if(is_bool($bool)) {
        return true;
    }
    return false;
}

//exo2
function text() {
    $chaine = "Coucou,...blablabla ! <br>";
    return $chaine;
}
echo text();

//exo 3
function blabla(string $text1 , string $text2, $br) {
       $text1 = "hello";
       $text2 = "world";
       return $text1 . $text2 . " ! <br>";
}

//exo 4
function number(Int $number1, Int $number2) {
    if($number1 > $number2) {
        return "Le nombre " . $number1 . " est plus grand";
    }
    elseif($number1 < $number2) {
        return "Le nombre " . $number1 . " est plus petit";
    }
    else {
        return "Les 2 nombres sont égaux";
    }
    echo number(5,3);
}

//exo 5
function returnString (string  $text, Int $number) {
    $text = "youpi";
    $number = 5;
   return $number.$text;
}

//exo 6
function person(string $nom, Int $age, string $prenom) {
    echo person("Sara","14","Croche");
    return "Bonjour " . $nom . " " . $prenom . ", tu as " . $age . " ans";
}

//exo 7
function sexe($genre, Int $age) {
    if ($genre === "Homme" || $genre === "homme") {
        if ($age > 17) {
            return "Vous êtes un homme et vous êtes majeur";
        } else {
            return "Vous êtes un homme et vous êtes mineur";
        }
    }
    elseif ($genre === "Femme" || $genre === "femme") {
        if ($age > 17) {
            return "Vous êtes une femme et vous êtes majeur";
        }
        else {
            return "Vous êtes une femme et vous êtes mineur";
        }
    }
        else {
        return "Veuillez indiquer Homme ou Femme dans le genre";
        }
         echo sexe("femme", "");
}

//exo 8
function finish(Int $number1 = 1, Int $number2 = 2, Int $number3 = 3) {
    return $number1 + $number2 + $number3;
}
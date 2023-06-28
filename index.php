<!-- EXERCICE 1 -->

<div>
    <?php
    function afficherVrai ($result = true) {
        return $result;
    }
    echo afficherVrai();
    ?>
</div>
<br>

<!-- EXERCICE 2 -->

<div>
    <?php
    function chaineC ($txt = "Hello World !") {
        return $txt;
    }
    echo chaineC();
    ?>
</div>
<br>

<!-- EXERCICE 3 -->

<div>
    <?php
    function txtFinal ($txt1, $txt2) {
        return $txt1.$txt2;
    }
    echo txtFinal("Salut les mecs, ", "ça va ?!");
    ?>
</div>
<br>

<!-- EXERCICE 4 -->

<div>
    <?php
    function nbr ($nbr1, $nbr2) {
        if ($nbr1 > $nbr2) {
            return "Le premier nombre est plus grand";
        } 
        if ($nbr1 < $nbr2){
            return "Le premier nombre est plus petit";
        } else {
            return "Les deux nombres sont identiques";
        }
    }
    echo nbr(5,5);
    ?>
</div>
<br>

<!-- EXERCICE 5 -->

<div>
    <?php
    function concat ($nbr, $txt) {
        return $nbr.$txt;
    }
    echo concat (5,"Hello World");
    ?>
</div>
<br>

<!-- EXERCICE 6 -->

<div>
    <?php
    function presenter ($nom, $prenom, $age) {
        return "Bonjour ".$nom." ".$prenom.", tu as ".$age." ans";
    }
    echo presenter ("Gurbala", "Maxime", "22");
   ?>
</div>
<br>

<!-- EXERCICE 7 -->

<div>
    <?php
    function genre ($age, $genre) {
        if ($age >= 18 && $genre=="Homme"){
            return "Vous etes un ".$genre." et vous etes majeur.";
        }
        if ($age <= 18 && $genre=="Homme"){
            return "Vous etes un ".$genre." et vous etes mineur.";
        }
        if ($age >= 18 && $genre=="Femme"){
            return "Vous etes une ".$genre." et vous etes majeur.";
        }
        if ($age <= 18 && $genre=="Femme"){
            return "Vous etes une ".$genre." et vous etes mineur.";
        }
    }
    echo genre (17, "Homme");
    ?>
</div>
<br>

<!-- EXERCICE 8 -->

<div>
    <?php
    function numbers ($nbr1, $nbr2, $nbr3) {
        return $nbr1+$nbr2+$nbr3;
    }
    echo numbers (30, 50, 44);
    ?>
</div>
<!-- Acivation short_open_tags dans php.ini :
short_open_tag=On <? ?>
short_open_tag=Off <?php ?>-->

<h4>Affichage en fonction de l'age</h4>
<?php
$age = 17;
$phrase = "Vous êtes un ";

if ($age < 10) {
    echo "$phrase enfant";
} elseif ($age < 16) {
    echo "$phrase ado";
} elseif ($age >= 17) {
    echo "$phrase adulte";
}
?>

<h4>Compteur 0 à MAX</h4>
<?php
define("MAX", 25);
for ($i = 0; $i <= MAX; $i++) {
    echo "$i ";
}
?>

<h4>Compteur somme série 0 à MAX</h4>
<?php
define("NB", 5);
$somme = 0;
$phrase = "somme de $somme";
echo "max = ", NB, "</br>";
for ($i = 1; $i <= NB; $i++) {
    if ($i < NB) {
        $phrase = $phrase . " + " . $i;
    } else {
        $phrase = $phrase . " + " . $i . " = ";
    }
    $somme += $i;
}
echo "$phrase $somme";
?>

<h4>Accéder aux éléments d'un tableau</h4>

<pre>
<?php
$mots = ['Bonjour,', 'je', 'suis', 'un', 'stagiaire', 'en', 'développement', 'web', 'et', 'je', 'fais', 'des', 'progrès', 'tous', 'les', 'jours.'];
print_r($mots);
?>
<pre>
<?php echo "résultat : </br>";
foreach ($mots as $mot) {
    echo "$mot ";
} ?>

<h4>Rang des lettres de l'alphabet</h4>
<?php
$alpha = 'abcdefghijklmnopqrstuvwxyz';
$lg = strlen($alpha);
echo "$alpha contient $lg lettres.</br>";
for ($i = 0; $i < $lg; $i++) {
    $lettre = strtoupper($alpha[$i]);
    if ($i === 0) {
        echo "$lettre est la ", $i + 1, " ere lettre de l'alphabet </br>";
    } else {
        echo "$lettre est la ", $i + 1, " eme lettre de l'alphabet </br>";
    }
}
?>

<h4>Moyenne d'une série de notes</h4>
<?php

$notes = [15, 13, 20, 8, 11, 9];
$totalNotes = 0;
$notesError = 0;
$moyenne = 0;

for ($i = 0; $i < count($notes); $i++) {
    if ($notes[$i] < 0 || $notes[$i] > 20) {
        echo "une note n'est pas comprise entre 0 et 20</br>";
        $notesError = 1;
        break;
    } elseif (is_numeric($notes[$i]) === false) {
        echo "une note n'est pas un chiffre</br>";
        $notesError = 1;
        break;
    } else {
        $totalNotes += $notes[$i];
        $moyenne = $totalNotes / count($notes);
    }
}
if($notesError === 0){
    echo "la moyenne est de : $moyenne";
}
?>

<h4>Température ressentie</h4>
<?php

function ressentie($temp, $vent)
{
    return $temp - 0.1 * $vent;
}

$temp = 20;
$vent = 20;
$tempRessentie = ressentie($temp, $vent);

echo "température = $temp °C</br>";
echo "vent = $vent km/h</br>";
echo "température ressentie = $tempRessentie °C";
?>

<h4>Dictionnaire</h4>
<?php
$dico = array(
    'a' => 'abricot',
    'b' => 'banane',
    'c' => 'cerise',
    'd' => 'datte',
    'e' => 'elephant'
);
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
?>

<pre>
<?php print_r($dico) ?>
<pre>
<?php print_r($voyelles);

foreach ($dico as $firstLettre => $exemple) {
    if (in_array($firstLettre, $voyelles) === true) {
        echo "$firstLettre est une <strong>voyelle</strong> (exemple : $exemple)</br>";
    } else {
        echo "$firstLettre est une consonne (exemple : $exemple)</br>";
    };
}
?>
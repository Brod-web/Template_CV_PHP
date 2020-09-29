<?

$villes = array(
  array(
    'nom' => 'Toulouse',
    'habitants' => '466297',
    'geo' => 'sud-ouest',
    'specialite' => 'Le cassoulet',
    'img' =>'toulouse.jpg'
  ),
  array(
    'nom' => 'Bordeaux',
    'habitants' => '246586',
    'geo' => 'ouest',
    'specialite' => 'Le vin',
    'img' =>'bordeaux.jpg'
  ),
  array(
    'nom' => 'Paris',
    'habitants' => '2200000',
    'geo' => 'centre nord',
    'specialite' => 'Le jambon beurre',
    'img' =>'paris.jpg'
  ),
  array(
    'nom' => 'Marseille',
    'habitants' => '1059000',
    'geo' => 'sud-ouest',
    'specialite' => 'La bouillabaisse',
    'img' =>'marseille.jpg'
  ),
  array(
    'nom' => 'Lyon',
    'habitants' => '500715',
    'geo' => 'sud est',
    'specialite' => 'La quenelle',
    'img' =>'lyon.jpg'
  )
);

foreach($villes as $k => $ville){
  $nom = $ville['nom'];
  $nbHab = $ville['habitants'];
  $region = $ville['geo'];
  $specialite = $ville['specialite'];
  $img = $ville['img'];
  $rang = $k + 1;
  ?>
  <p><strong>Ville n°<?=$rang?> : <?=$nom?></strong></p>
  <ul>
    <li>Nombre d'habitants : <?=$nbHab?></li>
    <li>Région : <?=$region?></li>
    <li>Spécialité : <?=$specialite?></li>
  </ul>
  <img src="images/<?=$img?>" width="250px">
  <hr>
<? } ?>


<?
$cv = array(
    'nom' => 'Frédéric Brodut',
    'date_naissance' => '1975-09-17',
    'adresse' => '11, rue Robert Desnos 31170 Tournefeuille',
    'tel' => '0600000000',
    'photo' => 'fred.jpg',
    'metier' => 'Développeur web',
    'diplomes' => array(
      'Baccalauréat - Lycée Pierre et Marie Curie' => 2004,
      'BTS - Greta Montpellier' => 2008,
      'Licence - Université de Toulouse Paul Sabatier' => 2010,
      'Master - Université de Toulouse Paul Sabatier' => 2013
    ),
    'experiences' => array(
      array(
        'libelle' => "Job d'été (serveur)",
        'debut' => '2002-06-01',
        'fin' => '2002-09-01'
      ),
      array(
        'libelle' => "Stage service informatique chez EDF",
        'debut' => '2008-03-01',
        'fin' => '2008-10-01'
      ),
      array(
        'libelle' => "Développeur web chez Google",
        'debut' => '2013-10-01',
        'fin' => 'now'
      )
    ),
    'competences' => array(
      'html' => 4,
      'css' => 3,
      'javascript' => 5,
      'php' => 3
    )
);

//date_default_timezone_set('UTC');
setlocale(LC_TIME,'fr_FR');

function dateFR($date){
  $dateFR = strftime("%d %B %Y", strtotime($date));
  return $dateFR;
};

function age($date){
  $age = date('Y') - date('Y',strtotime($date));
  if(date('m-d') < date('m-d', strtotime($date))){
    $age = $age -1;
  } 
  return $age;
};

$tel = wordwrap($cv['tel'], 2, '-', true);

?>

<h1><?=$cv['nom']?> - <?=$cv['metier']?></h1>
<img src="images/<?=$cv['photo']?>" width="150px">
<p><?=age($cv['date_naissance'])?> ans</p>
<p><?=$cv['adresse']?></p>
<p>Téléphone : <?=$tel?></p>
<h2>Diplômes</h2>
<ul>
  <?foreach(array_reverse($cv['diplomes']) as $key => $value){?>
    <li><?=$value?> : <?=$key?></li>
  <?}?>
</ul>
<h2>Expériences</h2>
<ul>
  <?foreach(array_reverse($cv['experiences']) as $experience){?>
    <li><?=dateFR($experience['debut'])?> au <?=dateFR($experience['fin'])?> : <?=$experience['libelle']?></li>
  <?}?>
</ul>
<h2>Compétences</h2>
<table>
<?foreach($cv['competences'] as $key => $value){?>
  <tr>
    <td><?=strtoupper($key)?></td>
    <td><?for($i=1 ; $i < $value ; $i++){?>
      <img src="images/star.png" width="20px">
    <?}?></br>
    </td>
  </tr>
<?}?>
</table>

<style>
p{
  line-height: 8px;
}

table, tr, td{
  border: 1px solid black;
}

td{
  padding-left: 10px;
  padding-right: 10px;
}
</style>

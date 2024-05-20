<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empyrion - Survivant Galactique</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://odinn.biz/jeux/empyrion/style/css/style.css">
</head>
<body>Óðinn Qc<?php
   //le fichier xml est au même niveau que le fichier PHP qui le manipule
   $fichier = 'https://steamcommunity.com/profiles/76561198309316172/games/?xml=1';
   $contenu = simplexml_load_file($fichier);


for($i = 0; $i < 1000; $i++){
if ($contenu->games->game[$i]->appID == '383120')
{
      echo '<p>Heure joué : '.$contenu->games->game[$i]->hoursOnRecord.'</p>';  
}
   }

?></body>
</html>
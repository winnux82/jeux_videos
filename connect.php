<?php

$bdd = new PDO('mysql:host=sql512.main-hosting.eu;dbname=u718205419_jeux_videos', 'u718205419_jeux_videos', 'Blabla666');
$reponse = $bdd->query('select * from jeux_video');
while ($donnees = $reponse->fetch())
{
    echo '<p>' . $donnees['nom'] . '</p>';

}
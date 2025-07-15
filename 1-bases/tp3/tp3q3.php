<?php
$listeCours = [
    '130 : Développement Web côté Serveur (Back-End) /PHP',
    '10 : Algorithmique /Pseudo-Code',
    '50 : Projet n°1 - Web /HTML&CSS + JS',
    '100 : Projet n°2 - Web /Java Spring Boot',
    '90 : Développement Web côté Serveur (Back-End) /Java Spring Boot ',
    '30 : Web Client /HTML&CSS',
    '80 : Notions Complémentaires /Java SE',
    '160 : CMS /WordPress',
    '150 : Projet n°3 - Web /Symfony',
    '110 : Analyse et Conception /UML + Oracle Data Modeler',
    '20 : Initiation à la Programmation /Java',
    '70 : Programmation Orientée Objet /Java',
    '40 : JavaScript initiation',
    '120 : JavaScript avancé + initiation Framework JS /Angular',
    '140 : Développement Web côté Serveur (Back-End) /Symfony',
    '60 : Langage SQL /SQL Server'
];

natsort($listeCours);
echo '<ul>';
foreach ($listeCours as $cours) {
    echo '<li>'.$cours.'</li>';
}
echo '</ul>';

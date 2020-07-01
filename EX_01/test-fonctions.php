<?php
$nom_produit = "T-shirt femme";
$couleur = "Rouge";
$prix = "10.50";
$disponible ="true";
$quantite ="10";
$achat=5;
$nb_ajout=5;
include ("affichage.php");
include ("gestion-produit.php");

afficher_produit($nom_produit,$couleur,$prix,$disponible);
$quantite = achat($quantite,$achat);
$disponible=update_dispo($quantite);

afficher_produit($nom_produit,$couleur,$prix,$disponible);
$quantite = achat($quantite,$achat);
$disponible=update_dispo($quantite);

afficher_produit($nom_produit,$couleur,$prix,$disponible);
$quantite = restockage($quantite, $nb_ajout);
$disponible=update_dispo($quantite);

afficher_produit($nom_produit,$couleur,$prix,$disponible);
?>
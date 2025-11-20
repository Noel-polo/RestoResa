<!-- feedback/save-feedback.php -->
<?php
// Récupération sécurisée des données
$nom = htmlspecialchars($_POST['nom'] ?? '');
$note = intval($_POST['note'] ?? 0);
$commentaire = htmlspecialchars($_POST['commentaire'] ?? '');

// Vérification minimale
if ($nom && $note && $commentaire) {
    $ligne = [$nom, $note, $commentaire, date('Y-m-d H:i:s')];
    $fichier = fopen('feedback.csv', 'a');

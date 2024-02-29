<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
// Vérifier si des entreprises ont été récupérées
if(isset($fiveCompanies) && is_array($fiveCompanies) && count($fiveCompanies) > 0) {
    // Afficher les détails de chaque entreprise
    foreach($fiveCompanies as $fivecomp) {
        ?>
        <h2><?= $fivecomp->getName() ?></h2>
        <p>Pays: <?= $fivecomp->getCountry() ?></p>
        <p>Numéro de TVA: <?= $fivecomp->getTva() ?></p>
        <?php
    }
} else {
    // Aucune entreprise n'a été trouvée
    echo "<p>Aucune entreprise n'a été trouvée.</p>";
}
?>
<?php foreach($companies as $company): ?>
    <h2><?= $company->getName() ?></h2>
    <p>Pays: <?= $company->getCountry() ?></p>
    <p>Numéro de TVA: <?= $company->getTva()?></p>
<?php endforeach; ?>

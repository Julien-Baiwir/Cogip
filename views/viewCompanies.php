<?php foreach($companies as $company): ?>
    <h2><?= $company->getName() ?></h2>
    <p>Created at: <?= $company->getCreated_at()?></p>
    <p>Type: <?= $company->getTypeId()?></p>
<?php endforeach; ?>
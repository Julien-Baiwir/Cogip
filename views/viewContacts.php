<?php foreach($contacts as $contact): ?>
    <h2><?= $contact->getName() ?></h2>
    <p>Phone: <?= $contact->getPhone()?></p>
    <p>Email: <?= $contact->getEmail()?></p>
    <p>Company :</p>
    <p>Created at: <?= $contact->getCreated_at()?></p>

<?php endforeach; ?>
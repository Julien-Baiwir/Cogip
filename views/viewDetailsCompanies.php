<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php foreach ($detailsCompanies  as $detailsCompany): ?>
    <h1><?php echo $detailsCompany->getCompanyName(); ?></h1>
    <p>Name: <?php echo $detailsCompany->getCompanyName(); ?></p>
    <p>Tva: <?php echo $detailsCompany->getTva(); ?></p>
    <p>Country: <?php echo $detailsCompany->getCountry(); ?></p>
    <p>Type: <?php echo $detailsCompany->getTypeName(); ?></p>
<?php endforeach; ?>

<h2>Contact people</h2>

<?php foreach ($detailsContacts as $detailsContact): ?>
    <p>
        <a href="index.php?url=detailscontacts&id=<?php echo $detailsContact->getId(); ?>">
            <?php echo $detailsContact->getName(); ?>
        </a>
    </p>
    <p>ID: <?php echo $detailsContact->getId(); ?></p>
    <p>Email: <?php echo $detailsContact->getEmail(); ?></p>
    <p>Phone: <?php echo $detailsContact->getPhone(); ?></p>
    <p>Company Name: <?php echo $detailsContact->getCompanyName(); ?></p>
<?php endforeach; ?>


<h2>Last invoices</h2>

<?php foreach ($detailsInvoices  as $detailsInvoice ): ?>
    <p><?php echo $detailsInvoice ->getRef(); ?></p>
    <p><?php echo $detailsInvoice ->getCreatedAt(); ?></p>
    <p><?php echo $detailsInvoice ->getUpdatedAt(); ?></p>
<?php endforeach; ?>



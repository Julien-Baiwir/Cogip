<?php foreach($invoices as $invoice): ?>
    <div>
        <p>ID: <?php echo $invoice->getId(); ?></p>
        <p>Ref: <?php echo $invoice->getRef(); ?></p>
        <p>Created at: <?php echo $invoice->getCreated_at(); ?></p>
        <p>Updated at: <?php echo $invoice->getUpdate_at(); ?></p>
     
    </div>
<?php endforeach; ?>


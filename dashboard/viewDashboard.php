<h2>Statistics</h2>
<table>
        <tr>
            <th>Total Invoices</th>
            <th>Total Contacts</th>
            <th>Total Companies</th>
        </tr>
        <tr>
            <td><?php echo $statistics['total_invoices']; ?></td>
            <td><?php echo $statistics['total_contacts']; ?></td>
            <td><?php echo $statistics['total_companies']; ?></td>
        </tr>
    </table>

<?php
// Contacts
if (!empty($fivecontacts)) {
?>
    <h2>All contacts</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php foreach ($fivecontacts as $contact): ?>
            <tr>
                <td><?= $contact->getName() ?></td>
                <td><?= $contact->getEmail() ?></td>
                <td><?= $contact->getPhone() ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php
} else {
    echo "<p>No contacts available</p>";
}

// Invoices
if (!empty($fiveInvoices)) {
?>
    <h2>All invoices</h2>
    <table>
        <tr>
            <th>Invoice number</th>
            <th>Due date</th>
            <th>Company</th>
        </tr>
        <?php foreach ($fiveInvoices as $invoice): ?>
            <tr>
                <td><?= $invoice->getRef() ?></td>
                <td><?= $invoice->getUpdate_at() ?></td>
                <td><?= $invoice->getCompany_name() ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php
}

// Companies
if (!empty($fiveCompanies)) {
?>
    <h2>All companies</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>TVA</th>
            <th>Country</th>
        </tr>
        <?php foreach ($fiveCompanies as $fivecomp): ?>
            <tr>
                <td><?= $fivecomp->getName() ?></td>
                <td><?= $fivecomp->getTva() ?></td>
                <td><?= $fivecomp->getCountry() ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php
}
?>

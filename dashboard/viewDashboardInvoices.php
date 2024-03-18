<h2>new invoice</h2>


<?php
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
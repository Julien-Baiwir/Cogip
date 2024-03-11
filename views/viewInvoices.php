<?php

if(isset($invoices) && is_array($invoices) && count($invoices) > 0) {
    echo "<h1>All invoices</h1>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Invoice number</th>";
    echo "<th>Due dates</th>";
    echo "<th>Company</th>";
    echo "<th>Created at</th>";
    echo "</tr>";
    foreach($invoices as $invoice) {
?>
    <tr>
        <td><?= $invoice->getRef() ?></td>
        <td><?= $invoice->getUpdate_at() ?></td>
        <td><?= $invoice->getCompany_name() ?></td>
        <td><?= $invoice->getCreated_at() ?></td>
    </tr>
<?php
    }
    echo "</table>";
}


